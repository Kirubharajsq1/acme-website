/**
 * Acme demo — Zerra embed config stored in localStorage.
 * Works on http://localhost and http://192.168.8.69 without editing HTML.
 */
(function () {
  var KEY_SITE = "acme_zerra_site_key";
  var KEY_API = "acme_zerra_api_base";
  var KEY_SDK = "acme_zerra_sdk_src";

  function defaultHostBase() {
    var host = location.hostname || "localhost";
    // Frontend Vite (SDK + /api proxy) — same host as the page when possible
    var port = "5174";
    return "http://" + host + ":" + port;
  }

  function defaults() {
    var base = defaultHostBase();
    return {
      siteKey: "",
      apiBase: base + "/api",
      sdkSrc: base + "/zerra-sdk.min.js",
    };
  }

  function loadConfig() {
    var d = defaults();
    try {
      return {
        siteKey: localStorage.getItem(KEY_SITE) || d.siteKey,
        apiBase: localStorage.getItem(KEY_API) || d.apiBase,
        sdkSrc: localStorage.getItem(KEY_SDK) || d.sdkSrc,
      };
    } catch (e) {
      return d;
    }
  }

  function saveConfig(cfg) {
    try {
      localStorage.setItem(KEY_SITE, cfg.siteKey || "");
      localStorage.setItem(KEY_API, cfg.apiBase || "");
      localStorage.setItem(KEY_SDK, cfg.sdkSrc || "");
    } catch (e) {}
  }

  function clearConsent(siteKey) {
    try {
      Object.keys(localStorage).forEach(function (k) {
        if (k.indexOf("zerra_cookie_consent_") === 0) localStorage.removeItem(k);
      });
      if (siteKey) localStorage.removeItem("zerra_cookie_consent_" + siteKey);
    } catch (e) {}
    ["zerra-cookie-banner", "zerra-cookie-manage-button", "zerra-cookie-preferences"].forEach(function (id) {
      var n = document.getElementById(id);
      if (n) n.remove();
    });
  }

  function removeOldSdk() {
    document.querySelectorAll('script[data-acme-zerra-sdk="1"]').forEach(function (n) {
      n.remove();
    });
    try {
      window.Zerra = undefined;
      window.ZERRA_SDK = undefined;
      window.ZERRA_COOKIE = undefined;
      window.CMP = undefined;
    } catch (e) {}
  }

  function injectSdk(cfg) {
    removeOldSdk();
    clearConsent(cfg.siteKey);
    if (!cfg.siteKey || !cfg.apiBase || !cfg.sdkSrc) {
      setStatus("Enter a site key and save to load the banner.");
      return;
    }
    var s = document.createElement("script");
    s.src = cfg.sdkSrc + (cfg.sdkSrc.indexOf("?") >= 0 ? "&" : "?") + "t=" + Date.now();
    s.async = true;
    s.setAttribute("data-acme-zerra-sdk", "1");
    s.setAttribute("data-site-key", cfg.siteKey);
    s.setAttribute("data-api-base", cfg.apiBase.replace(/\/$/, ""));
    var q = new URLSearchParams(location.search);
    if (q.get("lang")) s.setAttribute("data-lang", q.get("lang"));
    if (q.get("country") || q.get("region") || q.get("cc")) {
      s.setAttribute("data-country", (q.get("country") || q.get("region") || q.get("cc")).toUpperCase());
    }
    s.onload = function () {
      setStatus("SDK loaded · " + cfg.siteKey.slice(0, 12) + "… · " + cfg.apiBase);
    };
    s.onerror = function () {
      setStatus("Failed to load SDK from " + cfg.sdkSrc);
    };
    document.body.appendChild(s);
  }

  var statusEl = null;
  function setStatus(msg) {
    if (statusEl) statusEl.textContent = msg;
  }

  function buildPanel() {
    if (document.getElementById("acme-zerra-config")) return;

    var style = document.createElement("style");
    style.textContent =
      "#acme-zerra-config{position:fixed;right:16px;bottom:16px;z-index:2147483000;width:min(360px,calc(100vw - 32px));" +
      "background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:14px 14px 12px;" +
      "font-family:Segoe UI,system-ui,sans-serif;color:#0f172a;box-shadow:none}" +
      "#acme-zerra-config.collapsed{width:auto;padding:10px 12px}" +
      "#acme-zerra-config.collapsed .acme-zerra-body{display:none}" +
      "#acme-zerra-config h3{margin:0;font-size:13px;font-weight:700;color:#432676}" +
      "#acme-zerra-config .acme-zerra-head{display:flex;align-items:center;justify-content:space-between;gap:8px;margin-bottom:0}" +
      "#acme-zerra-config.collapsed .acme-zerra-head{margin-bottom:0}" +
      "#acme-zerra-config:not(.collapsed) .acme-zerra-head{margin-bottom:10px}" +
      "#acme-zerra-config label{display:block;font-size:11px;font-weight:700;margin:8px 0 4px;color:#334155}" +
      "#acme-zerra-config input{width:100%;box-sizing:border-box;border:1px solid #e2e8f0;border-radius:8px;" +
      "padding:8px 10px;font-size:12px;background:#f8fafc;color:#0f172a}" +
      "#acme-zerra-config .acme-zerra-actions{display:flex;flex-wrap:wrap;gap:6px;margin-top:10px}" +
      "#acme-zerra-config button{border:1px solid #e2e8f0;border-radius:8px;padding:8px 10px;font-size:12px;" +
      "font-weight:600;cursor:pointer;background:#fff;color:#432676}" +
      "#acme-zerra-config button.primary{background:#432676;border-color:#432676;color:#fff}" +
      "#acme-zerra-config .acme-zerra-status{margin-top:8px;font-size:11px;color:#64748b;line-height:1.4}" +
      "#acme-zerra-config .acme-zerra-hint{margin:0 0 4px;font-size:11px;color:#64748b;line-height:1.4}";
    document.head.appendChild(style);

    var panel = document.createElement("div");
    panel.id = "acme-zerra-config";
    panel.innerHTML =
      '<div class="acme-zerra-head">' +
      "<h3>Zerra test key</h3>" +
      '<button type="button" id="acme-zerra-toggle" aria-label="Toggle">Hide</button>' +
      "</div>" +
      '<div class="acme-zerra-body">' +
      '<p class="acme-zerra-hint">Saved in localStorage. Use the same browser on localhost or 192.168.8.69 — API host auto-fills from this page URL.</p>' +
      '<label for="acme-zerra-site-key">Site key</label>' +
      '<input id="acme-zerra-site-key" type="text" spellcheck="false" placeholder="zk_…" autocomplete="off" />' +
      '<label for="acme-zerra-api-base">API base</label>' +
      '<input id="acme-zerra-api-base" type="url" spellcheck="false" placeholder="http://localhost:5174/api" />' +
      '<label for="acme-zerra-sdk-src">SDK script URL</label>' +
      '<input id="acme-zerra-sdk-src" type="url" spellcheck="false" placeholder="http://localhost:5174/zerra-sdk.min.js" />' +
      '<div class="acme-zerra-actions">' +
      '<button type="button" class="primary" id="acme-zerra-save">Save &amp; load</button>' +
      '<button type="button" id="acme-zerra-autofill">Use this host</button>' +
      '<button type="button" id="acme-zerra-clear">Clear consent</button>' +
      "</div>" +
      '<div class="acme-zerra-status" id="acme-zerra-status"></div>' +
      "</div>";
    document.body.appendChild(panel);

    statusEl = document.getElementById("acme-zerra-status");
    var siteInput = document.getElementById("acme-zerra-site-key");
    var apiInput = document.getElementById("acme-zerra-api-base");
    var sdkInput = document.getElementById("acme-zerra-sdk-src");
    var toggle = document.getElementById("acme-zerra-toggle");

    var cfg = loadConfig();
    // If API/SDK still point at the other host, refresh host defaults but keep site key
    var d = defaults();
    if (!localStorage.getItem(KEY_API)) apiInput.value = d.apiBase;
    else apiInput.value = cfg.apiBase;
    if (!localStorage.getItem(KEY_SDK)) sdkInput.value = d.sdkSrc;
    else sdkInput.value = cfg.sdkSrc;
    siteInput.value = cfg.siteKey;

    // Auto-align host on first paint if stored API host mismatches current hostname
    try {
      var storedHost = new URL(cfg.apiBase || d.apiBase).hostname;
      if (storedHost && storedHost !== location.hostname && cfg.siteKey) {
        // Keep key; update host paths for current URL
        apiInput.value = d.apiBase;
        sdkInput.value = d.sdkSrc;
      }
    } catch (e) {}

    function setCollapsed(collapsed) {
      if (collapsed) {
        panel.classList.add("collapsed");
        toggle.textContent = "Show";
      } else {
        panel.classList.remove("collapsed");
        toggle.textContent = "Hide";
      }
    }

    function readForm() {
      return {
        siteKey: (siteInput.value || "").trim(),
        apiBase: (apiInput.value || "").trim().replace(/\/$/, ""),
        sdkSrc: (sdkInput.value || "").trim(),
      };
    }

    document.getElementById("acme-zerra-save").onclick = function () {
      var next = readForm();
      if (!next.siteKey) {
        setStatus("Enter a site key first.");
        setCollapsed(false);
        return;
      }
      saveConfig(next);
      injectSdk(next);
      setCollapsed(true);
    };
    document.getElementById("acme-zerra-autofill").onclick = function () {
      var d2 = defaults();
      apiInput.value = d2.apiBase;
      sdkInput.value = d2.sdkSrc;
      setStatus("Filled API/SDK for " + location.hostname + ". Click Save & load.");
    };
    document.getElementById("acme-zerra-clear").onclick = function () {
      var next = readForm();
      clearConsent(next.siteKey);
      setStatus("Consent cleared. Reloading banner…");
      injectSdk(next);
    };
    toggle.onclick = function () {
      setCollapsed(!panel.classList.contains("collapsed"));
    };

    var initial = readForm();
    if (initial.siteKey) {
      injectSdk(initial);
      setCollapsed(true);
    } else {
      setStatus("Paste your zk_ site key, then Save & load.");
      setCollapsed(false);
    }
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", buildPanel);
  } else {
    buildPanel();
  }

  window.AcmeZerraConfig = { loadConfig: loadConfig, saveConfig: saveConfig, defaults: defaults, injectSdk: injectSdk };
})();
