<!-- ================= IMM BĐS QUỐC TẾ — BẮT ĐẦU KHỐI DÁN VÀO WORDPRESS ================= -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,300,0..1,0&family=Noto+Serif:ital,wght@0,400;0,600;1,400;1,600&family=Roboto:wght@400;500;700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
<style>
/* ============ IMM BĐS QUỐC TẾ — CSS đã cô lập trong .immbds ============ */
.immbds,.immbds *{box-sizing:border-box}
.immbds{--immbds-nav-top:59px;overflow:clip;background:#fff;font:400 16px/1.65 Roboto,Helvetica,Arial,sans-serif;color:#4C535E;-webkit-font-smoothing:antialiased}
.immbds h1,.immbds h2,.immbds h3{margin:0;font:400 1em/1.2 "Noto Serif",Georgia,serif;text-wrap:balance}
.immbds p,.immbds li,.immbds-sp-title,.immbds-project-meta__value{text-wrap:pretty}
.immbds a{text-decoration:none}
.immbds a:hover,.immbds a:focus{text-decoration:none}
.immbds img{display:block;width:100%;height:100%;object-fit:cover}
.immbds ul{margin:0;padding:0}
.immbds button{font:inherit}
.immbds-ms{font-family:'Material Symbols Outlined';font-variation-settings:'wght' 300,'opsz' 24;line-height:1;font-size:24px;flex:none}
.immbds-s15{font-size:15px}.immbds-s17{font-size:17px}.immbds-s18{font-size:18px}.immbds-s19{font-size:19px}.immbds-s22{font-size:22px}.immbds-s23{font-size:23px}.immbds-s26{font-size:26px}
.immbds-wrap{max-width:1240px;margin:0 auto;padding:0 40px}
.immbds-section{padding:104px 0;scroll-margin-top:calc(var(--immbds-nav-top,64px) + 64px)}
.immbds-eyebrow{display:flex;align-items:center;gap:16px}
.immbds-bar{width:34px;height:2px;background:#AE1F23}
.immbds-etxt{font-size:13px;font-weight:500;letter-spacing:.2em;text-transform:uppercase;color:#13294A}
.immbds h2{font-size:36px;line-height:1.22;color:#13294A;margin-top:26px}
.immbds-lead{margin-top:20px;font-size:17px;line-height:1.8;color:#4C535E}
.immbds-rule{height:1px;background:#E6E9EE;margin-top:18px}
.immbds-center{margin-top:38px;display:flex;justify-content:center}
/* buttons */
.immbds-btn{display:inline-flex;align-items:center;justify-content:center;gap:14px;padding:15px 28px;border-radius:3px;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;transition:background-color .3s cubic-bezier(.4,0,.2,1),color .3s,border-color .3s,box-shadow .3s}
.immbds-btn .immbds-ms{transition:transform .42s cubic-bezier(.4,0,.2,1)}
.immbds-btn.is-spin:hover .immbds-ico{transform:rotate(45deg)}
.immbds-btn--red{background:#CC1316;color:#fff;letter-spacing:.12em;box-shadow:0 8px 22px rgba(204,19,22,.32)}
.immbds-btn--red:hover{background:#8E1A1D}
.immbds-btn--outline{border:1px solid rgba(255,255,255,.45);color:#fff;letter-spacing:.12em}
.immbds-btn--outline:hover{background:#fff;border-color:#fff;color:#071D37}
.immbds-btn--navy{background:#0F2A54;color:#fff}
.immbds-btn--navy:hover{background:#071D37}
.immbds-btn--ghost{border:1px solid #C9D0DA;color:#13294A}
.immbds-btn--ghost:hover{border-color:#13294A}
.immbds-btn--ghost-dark{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.28);color:#fff}
.immbds-btn--ghost-dark:hover{background:rgba(255,255,255,.16)}
.immbds-btn--big{padding:15px 29px;background:#AE1F23;color:#fff;font-size:15px;letter-spacing:.12em;box-shadow:0 8px 20px rgba(174,31,35,.26)}
.immbds-btn--big:hover{background:#8E1A1D}
.immbds-media{position:absolute;inset:0;overflow:hidden}
.immbds-media img{transition:transform .7s cubic-bezier(.16,1,.3,1)}
.immbds-media:hover img,.immbds-project-card:hover .immbds-media img,.immbds-path-card:hover .immbds-media img{transform:scale(1.08)}
.immbds-reveal{opacity:0;transform:translateY(30px);transition:opacity .72s cubic-bezier(.16,1,.3,1),transform .72s cubic-bezier(.16,1,.3,1)}
.immbds-reveal.is-in{opacity:1;transform:none}
/* subnav */
.immbds-nav{position:fixed;top:var(--immbds-nav-top,0px);left:0;right:0;z-index:60;background:#0A1E39;border-bottom:1px solid rgba(255,255,255,.1);box-shadow:0 8px 24px rgba(7,29,55,.28);transform:translateY(-120%);opacity:0;pointer-events:none;transition:transform .38s cubic-bezier(.16,1,.3,1),opacity .38s}
.immbds-nav.is-show{transform:none;opacity:1;pointer-events:auto}
.immbds-nav .immbds-wrap{height:56px;display:flex;align-items:stretch;justify-content:center;gap:24px}
.immbds-navlinks{display:flex;align-items:stretch;gap:2px;min-width:0;overflow-x:auto;scrollbar-width:none}
.immbds-navlinks::-webkit-scrollbar{display:none}
.immbds-navlinks a{position:relative;display:inline-flex;align-items:center;gap:9px;padding:0 18px;font-size:13px;white-space:nowrap;color:#B9C2CE;transition:color .3s,background-color .3s}
.immbds-navlinks a i{font-family:'Roboto Condensed',Roboto,sans-serif;font-style:normal;font-size:12px;font-weight:700;letter-spacing:.06em;color:#8A7645;transition:color .3s}
.immbds-navlinks a.is-on{color:#fff;font-weight:700;background:rgba(255,255,255,.06)}
.immbds-navlinks a.is-on i{color:#E8C56A}
.immbds-navlinks a.is-on::after{content:"";position:absolute;left:14px;right:14px;bottom:0;height:2px;background:#CC1316}
/* hero */
#immbds-hero{position:relative;background:#071D37;padding:112px 0 56px;overflow:hidden}
.immbds-hero-slides{position:absolute;inset:0;overflow:hidden}
.immbds-hero-slide{position:absolute;inset:0;opacity:0;transition:opacity 1.2s cubic-bezier(.4,0,.2,1)}
.immbds-hero-slide.is-active{opacity:1}
.immbds-hero-slide img{width:100%;height:100%;object-fit:cover;transform:scale(1.02)}
.immbds-hero-slide.is-active img{animation:immbds-kenburns 7s cubic-bezier(.22,.61,.36,1) forwards}
@keyframes immbds-kenburns{from{transform:scale(1.02)}to{transform:scale(1.11)}}
@media (prefers-reduced-motion:reduce){
  .immbds-hero-slide.is-active img{animation:none}
  .immbds-hero-slide{transition:none}
}
#immbds-hero .immbds-grad{position:absolute;inset:0;background:linear-gradient(180deg,rgba(7,29,55,.86),rgba(7,29,55,.72) 45%,rgba(7,29,55,.94));pointer-events:none}
#immbds-hero .immbds-wrap{position:relative;display:flex;flex-direction:column;align-items:center;text-align:center}
.immbds-badge{display:inline-flex;align-items:center;gap:12px;padding:9px 22px;border-radius:999px;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.18);font-size:13px;font-weight:500;letter-spacing:.18em;text-transform:uppercase;color:#EDEFF3}
.immbds-badge b{width:7px;height:7px;border-radius:50%;background:#E8C56A}
.immbds h1{margin-top:34px;padding-bottom:6px;font-size:60px;line-height:1.16;color:#fff;letter-spacing:.01em}
.immbds-kicker{margin-top:34px;max-width:900px;font-family:"Noto Serif",Georgia,serif;font-style:italic;font-size:26px;line-height:1.45;color:#E8C56A}
.immbds-kicker strong{font-weight:600;color:#F4E3B0}
.immbds-hero-cta{margin-top:44px;display:flex;flex-wrap:wrap;justify-content:center;gap:26px}
.immbds-hairline{margin-top:56px;width:100%;max-width:1160px;height:1px;background:rgba(255,255,255,.22)}
.immbds-proof{margin-top:44px;width:100%;max-width:1160px;display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,280px),1fr));gap:28px;text-align:left}
.immbds-proof>div{display:flex;gap:20px;align-items:flex-start}
.immbds-proof-box{flex:none;display:inline-flex;align-items:center;justify-content:center;width:46px;height:46px;border-radius:3px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.16);color:#E8C56A}
.immbds-proof-t{font-size:16px;font-weight:700;letter-spacing:.05em;text-transform:uppercase;color:#fff}
.immbds-proof-d{margin-top:6px;font-size:16px;color:#C3CAD4}
.immbds-scrolldown{margin-top:52px;display:flex;flex-direction:column;align-items:center;gap:10px;color:#9BA6B4;font-size:12px;font-weight:500;letter-spacing:.2em;text-transform:uppercase}
.immbds-scrolldown .immbds-ms{font-size:23px;animation:immbds-bob 1.8s cubic-bezier(.4,0,.2,1) infinite}
@keyframes immbds-bob{0%,100%{transform:translateY(0);opacity:.75}50%{transform:translateY(9px);opacity:1}}
/* tổng quan — ảnh 70% + panel navy đè lên ảnh, 7 khối lợi ích */
#immbds-tong-quan{background:#F6F4F0;padding-bottom:96px}
#immbds-tong-quan .immbds-wrap{display:block;max-width:1440px;padding:0 32px}
.immbds-ov-stage{position:relative;display:grid;grid-template-columns:repeat(12,minmax(0,1fr));align-items:center}
.immbds-ov-media{position:relative;grid-column:4 / -1;grid-row:1;min-height:600px;background:#0C1E35;overflow:hidden}
.immbds-ov-panel{grid-column:1 / 7;grid-row:1;z-index:2;align-self:center;background:#13294A;padding:52px 48px 56px;box-shadow:0 26px 60px rgba(7,29,55,.28)}
.immbds-ov-panel .immbds-etxt{color:#E8C56A}
.immbds-ov-lead{margin-top:30px;font-family:"Noto Serif",Georgia,serif;font-style:italic;font-size:20px;line-height:1.62;color:#EAEEF4}
.immbds-sp{position:relative;z-index:3;margin-top:-72px;display:grid;grid-template-columns:repeat(12,minmax(0,1fr));gap:22px}
.immbds-sp-item{grid-column:span 3;background:#fff;border:1px solid #E7E3DB;padding:26px 24px 28px;display:flex;flex-direction:column;transition:border-color .3s,box-shadow .3s}
.immbds-sp-item:hover{border-color:#C9D0DA;box-shadow:0 12px 28px rgba(7,29,55,.08)}
.immbds-sp-head{display:flex;align-items:center;gap:16px}
.immbds-sp-num{font-family:'Roboto Condensed',Roboto,sans-serif;font-size:15px;font-weight:700;letter-spacing:.06em;color:#CC1316;flex:none}
.immbds-sp-div{width:1px;height:26px;background:#E2DED5;flex:none}
.immbds-sp-head .immbds-ms{font-size:26px;color:#13294A}
.immbds-sp-title{margin-top:18px;font-size:16px;font-weight:600;line-height:1.35;letter-spacing:.03em;text-transform:uppercase;color:#13294A}
.immbds-sp-desc{margin-top:12px;font-size:16px;line-height:1.7;color:#4C535E}
@media (max-width:1180px){
  .immbds-ov-media{min-height:460px}
  .immbds-ov-panel{grid-column:1 / 8;padding:40px 34px 44px}
  .immbds-sp-item{grid-column:span 6}
}
@media (max-width:860px){
  .immbds-ov-stage{grid-template-columns:1fr}
  .immbds-ov-media{grid-column:1;grid-row:1;min-height:280px}
  .immbds-ov-panel{grid-column:1;grid-row:2;align-self:start;margin:-48px 16px 0;box-shadow:0 18px 40px rgba(7,29,55,.24)}
  .immbds-sp{margin-top:28px}
}
/* hai hướng — theo bds-quoc-te */
#immbds-hai-huong{position:relative;background:#061B31 url('https://immgroup.com/wp-content/uploads/2026/09/bg-1.webp') center/cover no-repeat;border-top:1px solid rgba(217,171,91,.22);border-bottom:1px solid rgba(217,171,91,.22);overflow:hidden}
#immbds-hai-huong .immbds-path-wrap{position:relative;z-index:1;max-width:1400px;margin:0 auto;padding:0 40px}
#immbds-hai-huong .immbds-eyebrow{justify-content:center}
#immbds-hai-huong .immbds-etxt{color:#E9EDF3}
#immbds-hai-huong h2{margin-right:auto;margin-left:auto;max-width:1080px;color:#fff;text-align:center}
#immbds-hai-huong .immbds-lead{margin:22px auto 0;max-width:1080px;color:#C9D5E2;text-align:center}
.immbds-path-grid{margin-top:56px;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));align-items:stretch;gap:48px}
.immbds-path-card{background:#fff;border:1px solid rgba(216,225,234,.72);border-radius:7px;overflow:hidden;display:flex;flex-direction:column;box-shadow:0 22px 48px rgba(0,10,22,.28);transition:border-color .3s cubic-bezier(.4,0,.2,1),box-shadow .3s cubic-bezier(.4,0,.2,1)}
.immbds-path-card:hover{border-color:#0F2A54;box-shadow:0 26px 54px rgba(0,10,22,.36)}
.immbds-path-media{position:relative;aspect-ratio:16/7.7;background:#0C1E35;overflow:hidden}
.immbds-path-body{padding:20px 40px 28px;display:flex;flex-direction:column;flex:1}
.immbds-path-choice{display:inline-flex;align-self:flex-start;padding:6px 13px;background:#E6F2FB;color:#13294A;font-size:9px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;border-radius:2px}
.immbds-path-body h3{margin-top:14px;font-size:24px;line-height:1.32;color:#13294A}
.immbds-path-desc{margin-top:16px;min-height:84px;font-size:16px;line-height:1.75;color:#4C535E}
.immbds-path-hr{margin:20px 0;height:1px;background:#E6E9EE}
.immbds-path-list{margin:22px 0 0;padding:0;list-style:none;display:flex;flex-direction:column;gap:14px}
.immbds-path-list li{display:flex;gap:12px;align-items:flex-start}
.immbds-path-list .immbds-ms{font-size:20px;line-height:1.5;font-variation-settings:'wght' 400,'opsz' 20,'FILL' 1;color:#0E7C5A}
.immbds-path-list span:last-child{font-size:16px;line-height:1.6;color:#4C535E}
.immbds-path-limit{margin-top:24px;padding:15px 18px;border-left:4px solid #0F2A54;border-radius:4px;background:#F4F7FB}
.immbds-path-limit__label{font-size:11px;font-weight:600;letter-spacing:.12em;text-transform:uppercase;color:#0F2A54}
.immbds-path-limit__value{margin-top:4px;font-family:'Noto Serif',Georgia,serif;font-size:24px;font-weight:600;line-height:1.2;color:#0F2A54}
.immbds-path-limit.is-red{border-left-color:#CC1316;background:#FEF5F5}
.immbds-path-limit.is-red .immbds-path-limit__label,.immbds-path-limit.is-red .immbds-path-limit__value{color:#CC1316}
.immbds-path-cta{margin-top:24px;display:flex;align-items:center;justify-content:center;gap:14px;padding:15px 18px;background:#fff;border:1px solid #13294A;border-radius:3px;color:#13294A;font-size:11px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;transition:background-color .3s cubic-bezier(.4,0,.2,1),color .3s,border-color .3s,box-shadow .3s}
.immbds-path-cta:hover{background:#F2F5F9}
.immbds-path-cta--primary{background:#CC1316;border-color:#CC1316;color:#fff;box-shadow:0 8px 20px rgba(204,19,22,.2)}
.immbds-path-cta--primary:hover{background:#8E1A1D;border-color:#8E1A1D;color:#fff}
/* tabs + notice */
.immbds-tabrow{margin-top:40px;display:flex;flex-wrap:wrap;gap:16px}
.immbds-tab{display:inline-flex;align-items:center;gap:9px;padding:13px 18px;border-radius:3px;background:#FBFCFD;border:1px solid #E2E6EC;color:#4C535E;font:700 11px/1 Roboto,sans-serif;letter-spacing:.1em;text-transform:uppercase;cursor:pointer;transition:background-color .3s,border-color .3s,color .3s}
.immbds-tab .immbds-flag{font-size:13px}
.immbds-cnt{display:inline-flex;align-items:center;justify-content:center;min-width:18px;height:18px;padding:0 5px;border-radius:999px;background:#EDF0F4;color:#4C535E;font-size:10px;letter-spacing:0}
.immbds-tab.is-on{background:#0F2A54;border-color:#0F2A54;color:#fff}
.immbds-tab.is-on .immbds-cnt{background:rgba(255,255,255,.22);color:#fff}
.immbds-tab.is-dark{background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.2);color:#DCE1E8}
.immbds-tab.is-dark .immbds-cnt{background:rgba(255,255,255,.12);color:#DCE1E8}
.immbds-tab.is-dark.is-on{background:#CC1316;border-color:#CC1316;color:#fff}
.immbds-notice{margin-top:32px;background:#F7F9FC;border:1px solid #E4E8EE;border-radius:3px;padding:26px 30px;display:flex;flex-wrap:wrap;align-items:center;gap:24px;justify-content:space-between}
.immbds-notice.is-dark{background:#23354D;border-color:rgba(255,255,255,.12)}
.immbds-ntxt{display:flex;gap:20px;align-items:flex-start;flex:1;min-width:300px}
.immbds-nicon{flex:none;display:inline-flex;align-items:center;justify-content:center;width:42px;height:42px;border-radius:3px;background:#EEF2F7;color:#4C535E}
.immbds-notice.is-dark .immbds-nicon{background:rgba(255,255,255,.08);color:#E8C56A}
.immbds-notice p{font-size:17px;line-height:1.75}
.immbds-notice strong{color:#AE1F23}
.immbds-notice.is-dark p{color:#DCE1E8}
.immbds-notice.is-dark strong{color:#E8C56A}
.immbds-sealtag{display:inline-flex;align-items:center;gap:12px;padding:11px 16px;border:1px solid #0E7C5A;border-radius:3px;color:#0E7C5A;font-size:16px;font-weight:500}
.immbds-sealtag.is-gold{border-color:#8A7645;color:#E8C56A}
.immbds-panel[hidden]{display:none!important}
.immbds-panel{display:block}
/* card dự án — theo bds-quoc-te, luôn 2 cột */
.immbds-project-grid{margin-top:48px;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:28px}
.immbds-project-card{background:#fff;border:1px solid #E2E6EC;border-radius:6px;overflow:hidden;display:flex;flex-direction:column;transition:border-color .3s cubic-bezier(.4,0,.2,1),box-shadow .3s cubic-bezier(.4,0,.2,1),opacity .72s cubic-bezier(.16,1,.3,1),transform .72s cubic-bezier(.16,1,.3,1)}
.immbds-project-card:hover{border-color:#0F2A54;box-shadow:0 10px 26px rgba(15,42,84,.12)}
#immbds-quoc-tich .immbds-project-card{border-color:transparent}
#immbds-quoc-tich .immbds-project-card:hover{box-shadow:0 10px 26px rgba(0,0,0,.28)}
.immbds-project-media{position:relative;aspect-ratio:16/10;background:#0C1E35;overflow:hidden}
.immbds-project-media>a{position:absolute;inset:0;display:block;overflow:hidden}
.immbds-project-scrim{position:absolute;inset:0;background:linear-gradient(180deg,rgba(7,29,55,.28) 0%,rgba(7,29,55,0) 45%,rgba(7,29,55,.7) 100%);pointer-events:none}
.immbds-project-badges{position:absolute;top:18px;left:20px;right:20px;display:flex;align-items:flex-start;justify-content:space-between;gap:12px;pointer-events:none}
.immbds-project-route,.immbds-project-status{display:inline-flex;align-items:center;gap:9px;min-height:38px;padding:9px 14px;border-radius:4px;font-size:11px;font-weight:700;letter-spacing:.1em;line-height:1.2;text-transform:uppercase;box-shadow:0 5px 16px rgba(7,29,55,.16)}
.immbds-project-route{background:rgba(8,40,77,.94);color:#fff}
.immbds-project-status{border:1px solid rgba(174,31,35,.25);background:rgba(255,247,247,.96);color:#AE1F23}
.immbds-project-status.is-available{border-color:rgba(14,124,90,.25);background:rgba(244,253,249,.96);color:#0A684D}
.immbds-project-country{position:absolute;left:20px;bottom:18px;display:inline-flex;align-items:center;gap:9px;padding:8px 14px;border:1px solid rgba(19,41,74,.14);border-radius:4px;background:rgba(255,255,255,.94);box-shadow:0 5px 16px rgba(7,29,55,.16);color:#13294A;font-size:13px;font-weight:700;line-height:1.2;pointer-events:none}
.immbds-project-body{padding:28px 30px 30px;display:flex;flex-direction:column;flex:1}
.immbds-project-body h3{font-size:24px;line-height:1.35;color:#13294A}
.immbds-price{margin-top:24px;padding:17px 20px;border-left:4px solid #AE1F23;border-radius:4px;background:#F5F7FA}
.immbds-price__label{font-size:12px;font-weight:500;letter-spacing:.14em;text-transform:uppercase;color:#6B7280}
.immbds-price__value{margin-top:5px;font-family:'Noto Serif',Georgia,serif;font-size:22px;font-weight:600;line-height:1.2;color:#AE1F23}
.immbds-project-meta{margin-top:20px;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));border-top:1px solid #E3E8EF;border-bottom:1px solid #E3E8EF}
.immbds-project-meta__item{min-width:0;display:grid;grid-template-columns:40px minmax(0,1fr);gap:12px;padding:16px 14px 16px 0;align-items:start}
.immbds-project-meta__item{border-bottom:1px solid #E3E8EF}
.immbds-project-meta__item:nth-child(odd):not(:last-child){padding-right:20px;border-right:1px solid #E3E8EF}
.immbds-project-meta__item:nth-child(even){padding-left:20px}
.immbds-project-meta__item:last-child{grid-column:1/-1;padding-right:0;border-right:0;border-bottom:0}
.immbds-project-meta__icon{display:inline-flex;width:40px;height:40px;align-items:center;justify-content:center;border-radius:5px;background:#F2F5F9;color:#13294A;font-family:'Material Symbols Outlined';font-size:23px;line-height:1;font-variation-settings:'wght' 300,'opsz' 24;font-weight:400}
.immbds-project-meta__label{display:block;margin-bottom:4px;color:#6B7280;font-size:11px;font-weight:500;letter-spacing:.1em;line-height:1.25;text-transform:uppercase}
.immbds-project-meta__value{display:block;color:#13294A;font-size:16px;font-weight:700;line-height:1.45;overflow-wrap:anywhere}
.immbds-project-meta__value a{display:inline-flex;align-items:flex-start;gap:5px;color:inherit;transition:color .3s}
.immbds-project-meta__value a:hover{color:#AE1F23}
.immbds-project-desc{margin-top:20px;font-size:17px;line-height:1.75;color:#4C535E;flex:1}
.immbds-project-hr{margin-top:24px;height:1px;background:#E6E9EE}
.immbds-project-acts{margin-top:22px;display:grid;grid-template-columns:repeat(auto-fit,minmax(min(100%,130px),1fr));gap:14px}
.immbds-project-acts .immbds-btn{padding:13px 12px;font-size:10px;gap:12px}
.immbds-project-acts .immbds-btn--navy:hover{background:#CC1316}
/* section quốc tịch (nền tối) */
#immbds-quoc-tich{position:relative;background:#071D37 url('https://immgroup.com/wp-content/uploads/2026/09/bg-1.webp') center/cover no-repeat;overflow:hidden}
#immbds-quoc-tich>.immbds-wrap{position:relative;z-index:1}
#immbds-quoc-tich h2{color:#fff}
#immbds-quoc-tich .immbds-lead{color:#C3CAD4}
#immbds-quoc-tich .immbds-bar{background:#CC1316}
#immbds-quoc-tich .immbds-etxt{color:#E8C56A}
#immbds-quoc-tich .immbds-rule{background:rgba(255,255,255,.16)}
/* bảng so sánh */
#immbds-so-sanh{background:#F7F8FA;border-bottom:1px solid #EAEDF1;padding-bottom:120px}
.immbds-headcenter{display:flex;flex-direction:column;align-items:center;text-align:center}
.immbds-cmp{margin-top:60px;background:#fff;border:1px solid #E2E6EC;border-radius:4px;overflow:hidden}
.immbds-crow{display:grid;grid-template-columns:minmax(220px,300px) 1fr 1fr;border-bottom:1px solid #E6E9EE}
.immbds-crow:last-child{border-bottom:none}
.immbds-crow>div{padding:22px 26px}
.immbds-crow>div:nth-child(1),.immbds-crow>div:nth-child(2){border-right:1px solid #E6E9EE}
.immbds-rh{background:#F7F9FB;display:flex;gap:12px;align-items:flex-start}
.immbds-rh b{margin-top:8px;width:6px;height:6px;border-radius:50%;background:#AE1F23;flex:none}
.immbds-rh span{font-size:16px;font-weight:700;color:#13294A}
.immbds-chead{border-bottom:1px solid #E2E6EC}
.immbds-navyc{background:#0F2A54;display:flex;align-items:center;gap:14px}
.immbds-inkc{background:#071D37;display:flex;align-items:center;gap:14px}
.immbds-ibox{display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;border-radius:3px;background:rgba(255,255,255,.12);color:#fff}
.immbds-inkc .immbds-ibox{background:rgba(255,255,255,.1);color:#E8C56A}
.immbds-cttl{font-family:"Noto Serif",Georgia,serif;font-size:17px;letter-spacing:.06em;text-transform:uppercase;color:#fff}
.immbds-inkc .immbds-cttl{color:#F4E3B0}
.immbds-cb{font-size:17px;font-weight:700;line-height:1.6;color:#13294A}
.immbds-cb.is-red{color:#CC1316}
.immbds-cn{margin-top:12px;font-size:17px;line-height:1.75}
.immbds-goal{display:flex;gap:12px;align-items:center;color:#0F2A54}
.immbds-goal.is-red{color:#CC1316}
.immbds-goal-t{font-size:17px;font-weight:700;color:#13294A}
.immbds-crow ul{margin:14px 0 0;padding-left:22px;display:flex;flex-direction:column;gap:8px;font-size:17px;line-height:1.7;list-style:disc}
.immbds-flags{display:flex;flex-wrap:wrap;gap:10px 22px;align-items:center;padding:24px 26px}
.immbds-flags span{display:inline-flex;align-items:center;gap:8px;padding:0;background:none;border:0;font-size:16px;font-weight:700;color:#13294A}
.immbds-flags.is-gold span{background:none;border:0;color:#8A6A1F}
.immbds-cq{font-family:"Noto Serif",Georgia,serif;font-style:italic;font-size:19px;line-height:1.7;color:#13294A;display:block}
@media (max-width:900px){
  .immbds-cmp{overflow-x:auto;-webkit-overflow-scrolling:touch}
  .immbds-cmp-table{width:max-content;min-width:100%}
  .immbds-crow{grid-template-columns:150px 280px 280px}
  .immbds-crow>div{padding:14px 16px}
  .immbds-flags{padding:14px 16px;gap:8px 16px}
  .immbds .immbds-rh span{line-height:1.35}
  .immbds .immbds-cttl{font-size:12px;letter-spacing:.04em}
  .immbds-ibox{width:24px;height:24px}
  .immbds-ibox .immbds-ms{font-size:16px}
  .immbds-navyc,.immbds-inkc{gap:10px}
  .immbds-cb{font-size:16px;line-height:1.5}
  .immbds-cn{margin-top:8px;font-size:16px;line-height:1.6}
  .immbds-goal-t{font-size:16px}
  .immbds-crow ul{margin-top:10px;padding-left:18px;gap:6px;font-size:16px;line-height:1.6}
  .immbds-cq{font-size:16px;line-height:1.6}
  .immbds-flags span{font-size:16px}
  .immbds-cmp{margin-top:36px}
}
@media (max-width:768px){
  .immbds-section{padding:56px 0}
  #immbds-hero{padding:84px 0 40px}
  .immbds-wrap,#immbds-hai-huong .immbds-path-wrap{padding:0 18px}
  .immbds h1{font-size:min(6.6vw,34px);line-height:1.16;letter-spacing:0;white-space:nowrap}
  .immbds h2{font-size:24px;line-height:1.26}
  .immbds-kicker{font-size:20px}
  #immbds-tong-quan{padding-bottom:56px}
  #immbds-tong-quan .immbds-wrap{padding:0 18px}
  .immbds-ov-panel{padding:26px 20px 30px;margin:-40px 10px 0}
  .immbds-ov-lead{margin-top:22px;font-size:19px;line-height:1.6}
  .immbds-ov-media{min-height:220px}
  .immbds-sp{gap:14px;margin-top:24px}
  .immbds-sp-item{grid-column:1/-1;padding:20px 18px 22px}
  .immbds-path-body h3,.immbds-project-body h3{font-size:19px}
  .immbds-project-grid,.immbds-proof{gap:16px}
  .immbds-path-grid{grid-template-columns:1fr;gap:24px}
  .immbds-project-grid{grid-template-columns:1fr}
  .immbds-path-body{padding:20px 18px 24px}
  .immbds-path-desc{min-height:0}
  .immbds-project-body{padding:18px 18px 20px}
  .immbds-project-badges{top:14px;left:14px;right:14px}
  .immbds-project-country{left:14px;bottom:14px}
  .immbds-project-route,.immbds-project-status{min-height:34px;padding:8px 10px;font-size:9px}
  .immbds-project-meta{grid-template-columns:1fr}
  .immbds-project-meta__item,.immbds-project-meta__item:nth-child(odd):not(:last-child),.immbds-project-meta__item:nth-child(even),.immbds-project-meta__item:last-child{padding:14px 0;border-right:0;border-bottom:1px solid #E3E8EF}
  .immbds-project-meta__item:last-child{border-bottom:0}
  .immbds-lead,.immbds-project-desc,.immbds-notice p{font-size:16px;line-height:1.7}
  .immbds-tabrow{flex-wrap:nowrap;overflow-x:auto;-webkit-overflow-scrolling:touch;scrollbar-width:none;gap:10px;margin-right:-18px;padding-right:18px;padding-bottom:4px}
  .immbds-tabrow::-webkit-scrollbar{display:none}
  .immbds-tab{flex:none;white-space:nowrap;gap:6px;padding:9px 12px;font-size:8px;letter-spacing:.08em}
  .immbds-tab .immbds-flag{font-size:9px}
  .immbds-tab .immbds-cnt{min-width:13px;height:13px;padding:0 4px;font-size:7px}
  .immbds-tabrow{margin-top:28px}
  .immbds-nav .immbds-wrap{height:48px}
  .immbds-hero-cta{flex-wrap:nowrap;gap:12px;width:100%}
  .immbds-hero-cta>a{flex:1 1 0;min-width:0;padding-left:14px;padding-right:14px;font-size:10px;letter-spacing:.05em;text-align:center}
}
</style>

<div class="immbds">

<nav class="immbds-nav" id="immbds-nav">
  <div class="immbds-wrap">
    <div class="immbds-navlinks">
      <a href="#immbds-tong-quan" class="is-on" data-nav="immbds-tong-quan"><i>01</i><span>Why international real estate</span></a>
      <a href="#immbds-hai-huong" data-nav="immbds-hai-huong"><i>02</i><span>Your objective</span></a>
      <a href="#immbds-danh-muc" data-nav="immbds-danh-muc"><i>03</i><span>Residence real estate (Europe)</span></a>
      <a href="#immbds-quoc-tich" data-nav="immbds-quoc-tich"><i>04</i><span>Citizenship projects</span></a>
      <a href="#immbds-so-sanh" data-nav="immbds-so-sanh"><i>05</i><span>Compare the two routes</span></a>
    </div>
  </div>
</nav>

<section class="immbds-section" id="immbds-hero">
  <div class="immbds-hero-slides">
    <div class="immbds-hero-slide is-active"><img src="https://immgroup.com/wp-content/uploads/2026/09/bat-dong-san-quoc-te-3.webp" alt="IMM Group international real estate" fetchpriority="high"></div>
    <div class="immbds-hero-slide"><img src="https://immgroup.com/wp-content/uploads/2026/09/bat-dong-san-quoc-te-2.webp" alt="IMM Group international real estate" loading="lazy"></div>
    <div class="immbds-hero-slide"><img src="https://immgroup.com/wp-content/uploads/2026/09/bat-dong-san-quoc-te-1.webp" alt="IMM Group international real estate" loading="lazy"></div>
  </div>
  <div class="immbds-grad"></div>
  <div class="immbds-wrap">
    <div class="immbds-badge"><b></b><span>IMM Group</span></div>
    <h1>International Real Estate</h1>
    <p class="immbds-kicker">International real estate is more than a store of value and a source of income in hard currency: it can also open a path to permanent residence or a second citizenship for your whole family.</p>
    <div class="immbds-hero-cta">
      <a class="immbds-btn immbds-btn--red is-spin" href="#immbds-danh-muc"><span>Explore the projects</span><span class="immbds-ms immbds-s23 immbds-ico">explore</span></a>
      <a class="immbds-btn immbds-btn--outline link-to" data-id="register" href="javascript:void(0);">Speak with an advisor</a>
    </div>
    <div class="immbds-hairline"></div>
    <div class="immbds-proof">
      <div><span class="immbds-proof-box"><span class="immbds-ms immbds-s26">flight_takeoff</span></span><div><div class="immbds-proof-t">Global mobility</div><div class="immbds-proof-d">Visa-free travel across the Schengen area with a European Golden Visa, and visa-free access to more than 140 destinations with a second citizenship</div></div></div>
      <div><span class="immbds-proof-box"><span class="immbds-ms immbds-s26">trending_up</span></span><div><div class="immbds-proof-t">Protect and grow your wealth</div><div class="immbds-proof-d">Long-term ownership, a store of value, and income in hard currency (USD/EUR)</div></div></div>
      <div><span class="immbds-proof-box"><span class="immbds-ms immbds-s26">diversity_3</span></span><div><div class="immbds-proof-t">A benefit that passes down</div><div class="immbds-proof-d">Permanent residence or a second citizenship for 2–3 generations</div></div></div>
    </div>
    <div class="immbds-scrolldown"><span>Scroll to explore</span><span class="immbds-ms">arrow_downward</span></div>
  </div>
</section>

<section class="immbds-section" id="immbds-tong-quan">
  <div class="immbds-wrap">
    <div class="immbds-ov-stage immbds-reveal">
      <div class="immbds-ov-media">
        <div class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2026/09/bat-dong-san-quoc-te-1.webp" alt="International real estate for families" loading="lazy"></div>
      </div>
      <div class="immbds-ov-panel">
        <div class="immbds-eyebrow"><span class="immbds-bar"></span><span class="immbds-etxt">Why international real estate</span></div>
        <p class="immbds-ov-lead">Property abroad can produce regular income in a hard currency while acting as a store of value and spreading risk through portfolio diversification. Beyond the financial side, owning an asset in a market with clear property law — together with easier travel, the right of residence, or a fallback plan for the family — creates long-term value that goes beyond investment return alone.</p>
      </div>
    </div>
    <div class="immbds-sp">
      <div class="immbds-sp-item immbds-reveal">
        <div class="immbds-sp-head"><span class="immbds-sp-num">01</span><span class="immbds-sp-div"></span><span class="immbds-ms">account_balance</span></div>
        <div class="immbds-sp-title">Diversify and protect your wealth</div>
        <p class="immbds-sp-desc">Hold part of your wealth abroad, in a hard currency such as the US dollar or the euro.</p>
      </div>
      <div class="immbds-sp-item immbds-reveal">
        <div class="immbds-sp-head"><span class="immbds-sp-num">02</span><span class="immbds-sp-div"></span><span class="immbds-ms">payments</span></div>
        <div class="immbds-sp-title">Income in hard currency</div>
        <p class="immbds-sp-desc">Rental yields in these markets are generally in the 3–5% range, producing passive income; actual returns depend on the property and the market.</p>
      </div>
      <div class="immbds-sp-item immbds-reveal">
        <div class="immbds-sp-head"><span class="immbds-sp-num">03</span><span class="immbds-sp-div"></span><span class="immbds-ms">home_work</span></div>
        <div class="immbds-sp-title">More options on where to live</div>
        <p class="immbds-sp-desc">A second home abroad, and a fallback plan for the family.</p>
      </div>
      <div class="immbds-sp-item immbds-reveal">
        <div class="immbds-sp-head"><span class="immbds-sp-num">04</span><span class="immbds-sp-div"></span><span class="immbds-ms">school</span></div>
        <div class="immbds-sp-title">Support for an international education</div>
        <p class="immbds-sp-desc">A base for your children to study abroad, settle, and plan ahead.</p>
      </div>
      <div class="immbds-sp-item immbds-reveal">
        <div class="immbds-sp-head"><span class="immbds-sp-num">05</span><span class="immbds-sp-div"></span><span class="immbds-ms">public</span></div>
        <div class="immbds-sp-title">Better international access</div>
        <p class="immbds-sp-desc">More freedom to travel, study, work, and live abroad.</p>
      </div>
      <div class="immbds-sp-item immbds-reveal">
        <div class="immbds-sp-head"><span class="immbds-sp-num">06</span><span class="immbds-sp-div"></span><span class="immbds-ms">storefront</span></div>
        <div class="immbds-sp-title">Room to grow a business</div>
        <p class="immbds-sp-desc">More scope to set up a company, trade, and reach new markets.</p>
      </div>
      <div class="immbds-sp-item immbds-reveal">
        <div class="immbds-sp-head"><span class="immbds-sp-num">07</span><span class="immbds-sp-div"></span><span class="immbds-ms">beach_access</span></div>
        <div class="immbds-sp-title">A vacation home, or somewhere to retire</div>
        <p class="immbds-sp-desc">A place to vacation, or to settle in later life, abroad.</p>
      </div>
      <div class="immbds-sp-item immbds-reveal">
        <div class="immbds-sp-head"><span class="immbds-sp-num">08</span><span class="immbds-sp-div"></span><span class="immbds-ms">family_history</span></div>
        <div class="immbds-sp-title">Wealth for the next generation</div>
        <p class="immbds-sp-desc">A real asset with long-term value that you can pass on.</p>
      </div>
    </div>
  </div>
</section>

<section class="immbds-section" id="immbds-hai-huong">
  <div class="immbds-path-wrap immbds-reveal">
    <div class="immbds-eyebrow"><span class="immbds-bar"></span><span class="immbds-etxt">Choose by objective</span></div>
    <h2>Two ways to own and invest in international real estate</h2>
    <p class="immbds-lead">Depending on your financial objective and your plans for the family, you can follow either of the two routes most investors take today.</p>
    <div class="immbds-path-grid">
      <div class="immbds-path-card">
        <div class="immbds-path-media">
          <div class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2026/09/luachon1.webp" alt="Choosing a residence route" loading="lazy"></div>
        </div>
        <div class="immbds-path-body">
          <span class="immbds-path-choice">Route 1</span>
          <h3>Real estate with residence rights</h3>
          <p class="immbds-path-desc">Buy a property that meets the program's investment threshold to obtain a residence permit or permanent residence for you and your family, while keeping full ownership of the asset.</p>
          <div class="immbds-path-hr"></div>
          <ul class="immbds-path-list">
            <li><span class="immbds-ms">check_circle</span><span>Full ownership of the property, with the right to resell after the holding period</span></li>
            <li><span class="immbds-ms">check_circle</span><span>Residence rights for your spouse, children, and parents (depending on the program)</span></li>
            <li><span class="immbds-ms">check_circle</span><span>Travel in the Schengen area under the European Golden Visa programs</span></li>
          </ul>
          <div class="immbds-path-limit">
            <div class="immbds-path-limit__label">Investment threshold</div>
            <div class="immbds-path-limit__value">From €250,000</div>
          </div>
          <a class="immbds-path-cta" href="#immbds-danh-muc"><span>See the projects</span><span class="immbds-ms immbds-s23">arrow_forward</span></a>
        </div>
      </div>
      <div class="immbds-path-card">
        <div class="immbds-path-media">
          <div class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2026/09/luachon2.webp" alt="Choosing a citizenship route" loading="lazy"></div>
        </div>
        <div class="immbds-path-body">
          <span class="immbds-path-choice">Route 2</span>
          <h3>Real estate with citizenship</h3>
          <p class="immbds-path-desc">Invest in a government-approved real estate project to obtain a second passport; processing takes months rather than years, and most programs have no residence requirement.</p>
          <div class="immbds-path-hr"></div>
          <ul class="immbds-path-list">
            <li><span class="immbds-ms">check_circle</span><span>A second citizenship for the whole family, passed on to the next generation</span></li>
            <li><span class="immbds-ms">check_circle</span><span>Processed in 4–8 months, with no residence or language requirement</span></li>
            <li><span class="immbds-ms">check_circle</span><span>The right to resell the property or the project share after the required period</span></li>
          </ul>
          <div class="immbds-path-limit is-red">
            <div class="immbds-path-limit__label">Investment threshold</div>
            <div class="immbds-path-limit__value">From US$400,000</div>
          </div>
          <a class="immbds-path-cta immbds-path-cta--primary" href="#immbds-quoc-tich"><span>See the projects</span><span class="immbds-ms immbds-s23">arrow_forward</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="immbds-section" id="immbds-danh-muc">
  <div class="immbds-wrap">
    <div class="immbds-reveal">
      <div class="immbds-eyebrow"><span class="immbds-bar"></span><span class="immbds-etxt">Real estate &amp; residence rights</span></div>
      <h2>Projects on the residence route</h2>
      <p class="immbds-lead" style="max-width:1180px">"Each country sets its own investment threshold, defines which property qualifies, and grants different residence rights. Choose a country to see the projects available."</p>
      <div class="immbds-tabrow">
        <button type="button" class="immbds-tab is-on" data-group="res" data-name="Hy Lạp"><span class="immbds-flag">🇬🇷</span><span>Greece</span><span class="immbds-cnt">2</span></button>
        <button type="button" class="immbds-tab" data-group="res" data-name="Cộng hòa Síp"><span class="immbds-flag">🇨🇾</span><span>Cyprus</span><span class="immbds-cnt">10</span></button>
      </div>
      <div class="immbds-rule" style="margin-top:26px"></div>
    </div>

      <div class="immbds-panel" data-group="res" data-name="Hy Lạp">
        <div class="immbds-notice">
          <div class="immbds-ntxt"><span class="immbds-nicon"><span class="immbds-ms immbds-s26">shield</span></span><p><strong>The Greece Golden Visa:</strong> a real estate investment from €250,000 for a qualifying change-of-use conversion, or €400,000 / €800,000 depending on the zone under the new rules, leads to Greek residence for 3 generations.</p></div>
          <span class="immbds-sealtag"><span class="immbds-ms immbds-s23">check_circle</span><span>Project reviewed by IMM Group's lawyers</span></span>
        </div>
        <div class="immbds-project-grid">
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-hy-lap/dau-tu-lay-thuong-tru-nhan-hy-lap-du-an-can-ho-cao-cap-kastella-bay/" aria-label="Kastella Bay premium apartments"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2026/06/Greece_new_project_-_Exterior_renderings.webp" alt="Kastella Bay project beside Mikrolimano bay, Piraeus" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇬🇷</span><span>Greece</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Kastella Bay premium apartments</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €250,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://www.google.com/maps/place/37%C2%B056&#x27;23.4%22N+23%C2%B039&#x27;33.8%22E/@37.9397959,23.6594287,59m/data=!3m1!1e3!4m4!3m3!8m2!3d37.939842!4d23.659381?entry=tts&amp;g_ep=EgoyMDI1MDkxMC4wIPu8ASoASAFQAw%3D%3D&amp;skid=3807f56c-e326-47e7-9244-4b03aea8ec20" target="_blank" rel="noopener noreferrer">Piraeus <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">Golden Visa apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Arish Capital Partners</span></span></div>
            </div>
            <p class="immbds-project-desc">Premium apartments beside the Mikrolimano marina, 12–15 minutes from central Athens. The project qualifies for the Golden Visa, opening a route to a Greek residence permit for the whole family, with travel in the Schengen area.</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-hy-lap/dau-tu-lay-thuong-tru-nhan-hy-lap-du-an-can-ho-cao-cap-kastella-bay/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-hy-lap/dau-tu-lay-thuong-tru-nhan-hy-lap-du-an-can-ho-dich-vu-etolikou-11/" aria-label="Etolikou 11 serviced apartments"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2026/06/2-3.webp" alt="The central port area of Piraeus, Greece" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇬🇷</span><span>Greece</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Etolikou 11 serviced apartments</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €250,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/oEYknCZqEYmsWHKX7" target="_blank" rel="noopener noreferrer">Piraeus <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">158 apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">MIBS Group</span></span></div>
            </div>
            <p class="immbds-project-desc">A former industrial building converted into 158 serviced apartments in the heart of the port of Piraeus, with a rooftop pool, a gym, and 24/7 reception — suitable both to live in and to rent out.</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-hy-lap/dau-tu-lay-thuong-tru-nhan-hy-lap-du-an-can-ho-dich-vu-etolikou-11/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        </div>
        <div class="immbds-center"><a class="immbds-btn immbds-btn--ghost" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-hy-lap/cac-du-an-bat-dong-san-hy-lap/">See all properties in Greece</a></div>
      </div>

      <div class="immbds-panel" data-group="res" data-name="Cộng hòa Síp" hidden>
        <div class="immbds-notice">
          <div class="immbds-ntxt"><span class="immbds-nicon"><span class="immbds-ms immbds-s26">shield</span></span><p><strong>Cyprus permanent residence:</strong> a new-build real estate investment from €300,000 excluding VAT leads to permanent residence for the whole family, with fast processing.</p></div>
          <span class="immbds-sealtag"><span class="immbds-ms immbds-s23">check_circle</span><span>Project reviewed by IMM Group's lawyers</span></span>
        </div>
        <div class="immbds-project-grid">
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-cao-cap-elysia-blu/" aria-label="Elysia Blu premium apartments"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2025/07/Du-an-can-ho-cao-cap-Elysia-Blu.jpg" alt="Elysia Blu premium apartments project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇨🇾</span><span>Cyprus</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Elysia Blu premium apartments</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €511,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/RKLrvuD9cKtzL4dx9" target="_blank" rel="noopener noreferrer">Paphos <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">200 apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Pafilia</span></span></div>
            </div>
            <p class="immbds-project-desc">2- and 3-bedroom apartments in central Paphos, Cyprus. Scale: 200 apartments. Qualifies for Cyprus permanent residence (real estate investment from €300,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-cao-cap-elysia-blu/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-biet-thu-ven-bien-beachside-villa/" aria-label="Beachside Villa seafront villas"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2025/01/Du-an-biet-thu-ven-bien-Beachside-Villa.jpg" alt="Beachside Villa seafront villas project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇨🇾</span><span>Cyprus</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Beachside Villa — seafront villas</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €633,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Villas</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/qz8thZrvexQzioGq5" target="_blank" rel="noopener noreferrer">Polis <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">28 villas</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Pafilia</span></span></div>
            </div>
            <p class="immbds-project-desc">Premium seafront villas on the Mediterranean coast, near the town of Polis. Scale: 28 villas. Qualifies for Cyprus permanent residence (real estate investment from €300,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-biet-thu-ven-bien-beachside-villa/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-khu-biet-thu-coral-vista/" aria-label="Coral Vista villas"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2024/12/Du-an-khu-biet-thu-Coral-Vista.jpg" alt="Coral Vista villas project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇨🇾</span><span>Cyprus</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Coral Vista villas</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €480,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Villas</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/ur4HhZwJRZmVXLwJ8" target="_blank" rel="noopener noreferrer">Paphos <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">19 villas</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Pafilia</span></span></div>
            </div>
            <p class="immbds-project-desc">Premium villas on the Peyia hilltop, Paphos. Scale: 19 villas. Qualifies for Cyprus permanent residence (real estate investment from €300,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-khu-biet-thu-coral-vista/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-sieu-du-an-limassol-marina/" aria-label="Limassol Marina"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2024/04/Dinh-cu-Cong-Hoa-Sip-Sieu-du-an-Limassol-Marina-1.jpg" alt="Limassol Marina project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇨🇾</span><span>Cyprus</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Limassol Marina</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €3,900,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Villas &amp; apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/GpQNczMshJtLptJg9" target="_blank" rel="noopener noreferrer">Limassol <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">Marina complex</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Cybarco</span></span></div>
            </div>
            <p class="immbds-project-desc">Luxury villas and apartments at Limassol Marina. Qualifies for Cyprus permanent residence (real estate investment from €300,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-sieu-du-an-limassol-marina/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-phuc-hop-5-sao-pafilia-plaza/" aria-label="Pafilia Plaza 5-star mixed-use apartments"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2023/11/Du-an-can-ho-phuc-hop-5-sao-Pafilia-Plaza.jpg" alt="Pafilia Plaza 5-star mixed-use apartments project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇨🇾</span><span>Cyprus</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Pafilia Plaza 5-star mixed-use apartments</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €378,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/sWjw1fexHHaKucvs8" target="_blank" rel="noopener noreferrer">Paphos <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">82 apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Pafilia</span></span></div>
            </div>
            <p class="immbds-project-desc">Five-star mixed-use apartments in central Paphos, Cyprus. Scale: 8 floors, 82 apartments. Qualifies for Cyprus permanent residence (real estate investment from €300,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-phuc-hop-5-sao-pafilia-plaza/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-biet-thu-nha-pho-dang-cap-konia-green/" aria-label="Konia Green villas &amp; townhouses"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2023/11/Du-an-biet-thu-nha-pho-dang-cap-Konia-Green.jpg" alt="Konia Green villas &amp; townhouses project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇨🇾</span><span>Cyprus</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Konia Green villas and townhouses</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €345,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Villas &amp; townhouses</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://www.google.com/maps/search/?api=1&amp;query=Konia+Green+Paphos+Cyprus" target="_blank" rel="noopener noreferrer">Paphos <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">34 villas &amp; 26 townhouses</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Pafilia</span></span></div>
            </div>
            <p class="immbds-project-desc">Detached villas and townhouses near central Paphos, Cyprus. Scale: 34 detached villas and 26 townhouses. Qualifies for Cyprus permanent residence (real estate investment from €300,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-biet-thu-nha-pho-dang-cap-konia-green/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-biet-thu-seaview-heights/" aria-label="Seaview Heights apartments &amp; villas"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2026/09/seaview-heights.webp" alt="Seaview Heights apartments &amp; villas project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇨🇾</span><span>Cyprus</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Seaview Heights apartments and villas</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €320,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Apartments &amp; villas</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/x529rrpBRzE1qfx69" target="_blank" rel="noopener noreferrer">Limassol <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">81 apartments &amp; 9 villas</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Cybarco</span></span></div>
            </div>
            <p class="immbds-project-desc">Premium apartments (1–3 bedrooms) and luxury villas (3–4 bedrooms) in Limassol, Cyprus. Scale: 81 apartments and 9 villas. Qualifies for Cyprus permanent residence (real estate investment from €300,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-biet-thu-seaview-heights/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-cao-cap-park-residences/" aria-label="Park Residences premium apartments"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2026/09/Cybarco_Developers_Park_Residences.webp" alt="Park Residences premium apartments project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇨🇾</span><span>Cyprus</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Park Residences premium apartments</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €320,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/DRzRLuffesMMQdtt5" target="_blank" rel="noopener noreferrer">Nicosia <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">12 apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Cybarco</span></span></div>
            </div>
            <p class="immbds-project-desc">2- and 3-bedroom premium apartments in Acropolis, Nicosia, Cyprus. Scale: a 4-story boutique building with 12 apartments in total. Qualifies for Cyprus permanent residence (real estate investment from €300,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-cao-cap-park-residences/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-cao-cap-centro-limassol/" aria-label="Centro Limassol premium apartments"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2026/09/Centro-Limassol-1.webp" alt="Centro Limassol premium apartments project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇨🇾</span><span>Cyprus</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Centro Limassol premium apartments</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €350,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/EfmF7KjyV3ePL5nW6" target="_blank" rel="noopener noreferrer">Limassol <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">60 apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Cybarco</span></span></div>
            </div>
            <p class="immbds-project-desc">1- and 2-bedroom premium apartments in central Limassol, Cyprus. Scale: 60 apartments. Qualifies for Cyprus permanent residence (real estate investment from €300,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-cao-cap-centro-limassol/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-cao-cap-aktea-residences-4/" aria-label="Aktea Residences 4 premium apartments"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2026/09/Cybarco_Developers_Aktea_Residences_-5-.webp" alt="Aktea Residences 4 premium apartments project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Residence route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇨🇾</span><span>Cyprus</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Aktea Residences 4 premium apartments</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From €545,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/mo98hwqhg7ixb4Lp6" target="_blank" rel="noopener noreferrer">Limassol <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">4-story apartment building</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Cybarco</span></span></div>
            </div>
            <p class="immbds-project-desc">1- and 2-bedroom premium apartments in central Limassol, Cyprus, 1 km from the sea. Scale: a 4-story boutique apartment building. Qualifies for Cyprus permanent residence (real estate investment from €300,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-can-ho-cao-cap-aktea-residences-4/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-danh-muc">Book a consultation</a>
            </div>
          </div>
        </article>
        </div>
        <div class="immbds-center"><a class="immbds-btn immbds-btn--ghost" href="https://immgroup.com/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/cac-du-an-bat-dong-san-cong-hoa-sip/">See all properties in Cyprus</a></div>
      </div>
  </div>
</section>

<section class="immbds-section" id="immbds-quoc-tich">
  <div class="immbds-wrap">
    <div class="immbds-reveal">
      <div class="immbds-eyebrow"><span class="immbds-bar"></span><span class="immbds-etxt">Investment &amp; citizenship</span></div>
      <h2>Real estate that leads directly to a second citizenship</h2>
      <p class="immbds-lead" style="max-width:1180px">"Each country has its own investment structure, threshold, and program conditions. Choose a country to see the projects available."</p>
      <div class="immbds-tabrow">
        <button type="button" class="immbds-tab is-dark is-on" data-group="cbi" data-name="Thổ Nhĩ Kỳ"><span class="immbds-flag">🇹🇷</span><span>Türkiye</span><span class="immbds-cnt">1</span></button>
        <button type="button" class="immbds-tab is-dark" data-group="cbi" data-name="Dominica"><span class="immbds-flag">🇩🇲</span><span>Dominica</span><span class="immbds-cnt">1</span></button>
        <button type="button" class="immbds-tab is-dark" data-group="cbi" data-name="Grenada"><span class="immbds-flag">🇬🇩</span><span>Grenada</span><span class="immbds-cnt">1</span></button>
      </div>
      <div class="immbds-rule" style="margin-top:26px"></div>
    </div>

      <div class="immbds-panel" data-group="cbi" data-name="Thổ Nhĩ Kỳ">
        <div class="immbds-notice is-dark">
          <div class="immbds-ntxt"><span class="immbds-nicon"><span class="immbds-ms immbds-s26">verified_user</span></span><p><strong>Turkish citizenship:</strong> invest from US$400,000 in real estate you own outright and hold it for 3 years; citizenship and passports are typically issued in about 6–8 months.</p></div>
        </div>
        <div class="immbds-project-grid">
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/quoc-tich-tho-nhi-ky-turkey/quoc-tich-tho-nhi-ky-du-an-axis-istanbul/" aria-label="Axis Istanbul premium apartments"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2022/03/Du-an-Axis-Istanbul-e1688696360751.jpg" alt="Axis Istanbul project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Citizenship route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇹🇷</span><span>Türkiye</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Axis Istanbul premium apartments</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From US$400,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">Apartments</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">100% freehold ownership</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://maps.app.goo.gl/TBdx81i7g4b3Na8w8" target="_blank" rel="noopener noreferrer">Istanbul <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">Apartments in a mixed-use complex</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Sur Yapı</span></span></div>
            </div>
            <p class="immbds-project-desc">Premium apartments in the Axis complex (Axis Mall, directly on the M1 metro line and the O-3 highway) in Istanbul's central business district, on the European side. Qualifies for the Turkey Citizenship by Investment program (real estate investment from US$400,000).</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/quoc-tich-tho-nhi-ky-turkey/quoc-tich-tho-nhi-ky-du-an-axis-istanbul/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-quoc-tich">Book a consultation</a>
            </div>
          </div>
        </article>
        </div>
        <div class="immbds-center"><a class="immbds-btn immbds-btn--ghost-dark" href="https://immgroup.com/quoc-tich-tho-nhi-ky-turkey/">More on Turkish citizenship</a></div>
      </div>

      <div class="immbds-panel" data-group="cbi" data-name="Dominica" hidden>
        <div class="immbds-notice is-dark">
          <div class="immbds-ntxt"><span class="immbds-nicon"><span class="immbds-ms immbds-s26">verified_user</span></span><p><strong>Dominica citizenship:</strong> invest from US$200,000 in a share of a government-approved resort project and hold it for 3–5 years; passports are typically issued in about 6–9 months.</p></div>
        </div>
        <div class="immbds-project-grid">
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/cac-nuoc-vung-caribbean/quoc-tich-dominica/quoc-tich-dominica-du-an-resort-secret-bay/" aria-label="Resort Secret Bay"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2021/12/Du-an-Secret-Bay-thumbnail.png" alt="Secret Bay resort project image, Dominica" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Citizenship route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇩🇲</span><span>Dominica</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>Secret Bay resort</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From US$212,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">A share in a 6-star resort</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">A share in the project</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://www.google.com/maps/search/?api=1&amp;query=Secret+Bay+Dominica" target="_blank" rel="noopener noreferrer">Portsmouth <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">A share in a 6-star resort</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">GEMS Holding Ltd</span></span></div>
            </div>
            <p class="immbds-project-desc">A share in the 6-star Secret Bay resort, developed by GEMS Holding, which is on the list of projects approved by the Government of Dominica. Qualifies for the Dominica Citizenship by Investment program under the real estate option.</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/cac-nuoc-vung-caribbean/quoc-tich-dominica/quoc-tich-dominica-du-an-resort-secret-bay/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-quoc-tich">Book a consultation</a>
            </div>
          </div>
        </article>
        </div>
        <div class="immbds-center"><a class="immbds-btn immbds-btn--ghost-dark" href="https://immgroup.com/cac-nuoc-vung-caribbean/quoc-tich-dominica/">More on Dominica citizenship</a></div>
      </div>

      <div class="immbds-panel" data-group="cbi" data-name="Grenada" hidden>
        <div class="immbds-notice is-dark">
          <div class="immbds-ntxt"><span class="immbds-nicon"><span class="immbds-ms immbds-s26">verified_user</span></span><p><strong>Grenadian citizenship:</strong> invest from US$270,000 in a share of a government-approved project to apply for a Grenadian passport — among Caribbean citizenship-by-investment countries, only Grenada has an E-2 treaty with the United States.</p></div>
        </div>
        <div class="immbds-project-grid">
        <article class="immbds-project-card immbds-reveal">
          <div class="immbds-project-media">
            <a href="https://immgroup.com/cac-nuoc-vung-caribbean/quoc-tich-grenada/quoc-tich-grenada-du-an-intercontinental-grenada-resort/" aria-label="InterContinental Grenada Resort"><span class="immbds-media"><img src="https://immgroup.com/wp-content/uploads/2022/06/Du-an-InterContinental-Grenada-Resort-thumb.png" alt="InterContinental Grenada Resort project image" loading="lazy"></span></a>
            <div class="immbds-project-scrim"></div>
            <div class="immbds-project-badges">
              <span class="immbds-project-route"><span class="immbds-ms immbds-s18">description</span>Citizenship route</span> <span class="immbds-project-status is-available"><span class="immbds-ms immbds-s17">check_circle</span><span>Units available</span></span>
            </div>
            <div class="immbds-project-country"><span>🇬🇩</span><span>Grenada</span></div>
          </div>
          <div class="immbds-project-body">
            <h3>InterContinental Grenada Resort</h3>
            <div class="immbds-price">
              <div class="immbds-price__label">Investment</div>
              <div class="immbds-price__value">From US$270,000</div>
            </div>
            <div class="immbds-project-meta">
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">apartment</span><span><span class="immbds-project-meta__label">Property type</span><span class="immbds-project-meta__value">A share in a resort</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">handshake</span><span><span class="immbds-project-meta__label">Investment type</span><span class="immbds-project-meta__value">A share in the project</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">location_on</span><span><span class="immbds-project-meta__label">Location</span><span class="immbds-project-meta__value"><a href="https://www.google.com/maps/place/La+Sagesse+Beach/" target="_blank" rel="noopener noreferrer">La Sagesse <span class="immbds-ms immbds-s15">open_in_new</span></a></span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">aspect_ratio</span><span><span class="immbds-project-meta__label">Size / scale</span><span class="immbds-project-meta__value">150 rooms</span></span></div>
              <div class="immbds-project-meta__item"><span class="immbds-project-meta__icon">corporate_fare</span><span><span class="immbds-project-meta__label">Developer</span><span class="immbds-project-meta__value">Range Developments</span></span></div>
            </div>
            <p class="immbds-project-desc">A real estate share in the InterContinental resort (IHG, 150 rooms, developed by Range Developments) on La Sagesse beach in southern Grenada. Qualifies for the Grenada Citizenship by Investment program — among Caribbean citizenship-by-investment countries, only Grenada has an E-2 treaty with the United States.</p>
            <div class="immbds-project-hr"></div>
            <div class="immbds-project-acts">
              <a class="immbds-btn immbds-btn--ghost is-spin" href="https://immgroup.com/cac-nuoc-vung-caribbean/quoc-tich-grenada/quoc-tich-grenada-du-an-intercontinental-grenada-resort/"><span>Details</span><span class="immbds-ms immbds-s19 immbds-ico">north_east</span></a>
              <a class="immbds-btn immbds-btn--navy" href="#immbds-quoc-tich">Book a consultation</a>
            </div>
          </div>
        </article>
        </div>
        <div class="immbds-center"><a class="immbds-btn immbds-btn--ghost-dark" href="https://immgroup.com/cac-nuoc-vung-caribbean/quoc-tich-grenada/">More on Grenadian citizenship</a></div>
      </div>
  </div>
</section>

<section class="immbds-section" id="immbds-so-sanh">
  <div class="immbds-wrap">
    <div class="immbds-headcenter immbds-reveal">
      <div class="immbds-eyebrow"><span class="immbds-bar"></span><span class="immbds-etxt">Compare the two routes</span><span class="immbds-bar"></span></div>
      <h2>The two investment routes side by side</h2>
      <p class="immbds-lead" style="max-width:1000px">Setting out the legal basis, the type of asset, and the countries involved helps you and your family choose the route that fits your long-term objective.</p>
    </div>
    <div class="immbds-cmp immbds-reveal">
     <div class="immbds-cmp-table">
      <div class="immbds-crow immbds-chead">
        <div style="background:#F7F9FB"></div>
        <div class="immbds-navyc"><span class="immbds-ibox"><span class="immbds-ms immbds-s23">shield</span></span><span class="immbds-cttl">Residence rights</span></div>
        <div class="immbds-inkc"><span class="immbds-ibox"><span class="immbds-ms immbds-s23">language</span></span><span class="immbds-cttl">Second citizenship</span></div>
      </div>
      <div class="immbds-crow">
        <div class="immbds-rh"><b></b><span>Route</span></div>
        <div><p class="immbds-cb">Real estate with residence rights (Golden Visa / permanent residence)</p><p class="immbds-cn">You own a qualifying property and receive a residence permit for the whole family.</p></div>
        <div><p class="immbds-cb">Real estate with citizenship</p><p class="immbds-cn">You invest in a government-approved project and are granted citizenship and a passport.</p></div>
      </div>
      <div class="immbds-crow">
        <div class="immbds-rh"><b></b><span>Goal</span></div>
        <div>
          <div class="immbds-goal"><span class="immbds-ms">check_circle</span><span class="immbds-goal-t">Adds a lawful right of residence in the destination country</span></div>
          <ul><li>A residence permit or permanent residence (PR) for the whole family</li><li>Travel in the Schengen area with a European Golden Visa, and wider international travel</li><li>A base for long-term study and living in the host country</li></ul>
        </div>
        <div>
          <div class="immbds-goal is-red"><span class="immbds-ms">check_circle</span><span class="immbds-goal-t">A second citizenship and passport</span></div>
          <ul><li>Full citizenship rights, and wider international travel</li><li>A global citizenship fallback plan for the whole family</li><li>No minimum physical residence in the country you invest in</li></ul>
        </div>
      </div>
      <div class="immbds-crow">
        <div class="immbds-rh"><b></b><span>The asset</span></div>
        <div><p class="immbds-cb">100% freehold ownership of the property</p><p class="immbds-cn">The title deed is in your own name — a premium apartment, a seafront villa, or a qualifying restoration or change-of-use property.</p></div>
        <div><p class="immbds-cb">Property ownership, or a share in a flagship project</p><p class="immbds-cn">100% ownership of an apartment (Türkiye), or a share in the project with a projected — not guaranteed — annual return (Dominica, Grenada).</p></div>
      </div>
      <div class="immbds-crow">
        <div class="immbds-rh"><b></b><span>Countries available</span></div>
        <div class="immbds-flags"><span><span>🇬🇷</span><span>Greece</span></span><span><span>🇨🇾</span><span>Cyprus</span></span></div>
        <div class="immbds-flags is-gold"><span><span>🇹🇷</span><span>Türkiye</span></span><span><span>🇩🇲</span><span>Dominica</span></span><span><span>🇬🇩</span><span>Grenada</span></span></div>
      </div>
      <div class="immbds-crow">
        <div class="immbds-rh"><b></b><span>Best suited to</span></div>
        <div><em class="immbds-cq">"Families who want another place to live, an international standard of schooling for their children, and a real asset in Europe to pass on."</em></div>
        <div><em class="immbds-cq">"Investors following a second-citizenship strategy, who value processing speed, travel flexibility, and room to expand a business globally."</em></div>
      </div>
     </div>
    </div>
    <div class="immbds-center" style="margin-top:48px"><a class="immbds-btn immbds-btn--big link-to" data-id="register" href="javascript:void(0);">Get help choosing a country</a></div>
  </div>
</section>
</div>
<script>
(function(){
  var root = document.querySelector('.immbds');
  if (!root) return;
  var nav = document.getElementById('immbds-nav'), hero = document.getElementById('immbds-hero');
  // tabs
  root.querySelectorAll('.immbds-tab').forEach(function(t){
    t.addEventListener('click', function(){
      var g = t.dataset.group, n = t.dataset.name;
      root.querySelectorAll('.immbds-tab[data-group="'+g+'"]').forEach(function(x){ x.classList.toggle('is-on', x === t); });
      root.querySelectorAll('.immbds-panel[data-group="'+g+'"]').forEach(function(p){ p.hidden = p.dataset.name !== n; });
      reveal();
    });
  });
  // scroll tới section: tự tính offset (menu chính + subnav), không phụ thuộc scroll-margin-top
  function navOffset(){
    var top = parseInt(getComputedStyle(root).getPropertyValue('--immbds-nav-top')) || 0;
    var h = nav ? nav.offsetHeight : 0;
    return top + h + 8;
  }
  root.addEventListener('click', function(ev){
    var a = ev.target.closest ? ev.target.closest('a[href^="#immbds-"]') : null;
    if (!a || !root.contains(a)) return;
    var el = document.getElementById(a.getAttribute('href').slice(1));
    if (!el) return;
    ev.preventDefault();
    var y = el.getBoundingClientRect().top + (window.scrollY || document.documentElement.scrollTop) - navOffset();
    window.scrollTo({ top: y < 0 ? 0 : y, behavior: 'smooth' });
    if (history.replaceState) history.replaceState(null, '', a.getAttribute('href'));
  });
  // hero slideshow: đổi ảnh mỗi 5s
  var slides = root.querySelectorAll('.immbds-hero-slide');
  if (slides.length > 1) {
    var si = 0;
    setInterval(function(){
      slides[si].classList.remove('is-active');
      si = (si + 1) % slides.length;
      var img = slides[si].querySelector('img');
      if (img) { img.style.animation = 'none'; void img.offsetWidth; img.style.animation = ''; }
      slides[si].classList.add('is-active');
    }, 5000);
  }
  // scroll reveal
  function reveal(){
    var vh = window.innerHeight || 800;
    root.querySelectorAll('.immbds-reveal:not(.is-in)').forEach(function(el){
      var r = el.getBoundingClientRect();
      if (r.bottom > 0 && r.top < vh - 40) el.classList.add('is-in');
    });
  }
  var ids = [].map.call(root.querySelectorAll('[data-nav]'), function(a){ return a.dataset.nav; });
  function onScroll(){
    // subnav: ẩn trong hero, hiện khi đã cuộn qua hết hero
    if (nav && hero) {
      var navTop = parseInt(getComputedStyle(root).getPropertyValue('--immbds-nav-top')) || 0;
      nav.classList.toggle('is-show', hero.getBoundingClientRect().bottom <= navTop);
    }
    var active = ids[0];
    ids.forEach(function(id){
      var el = document.getElementById(id);
      if (el && el.getBoundingClientRect().top <= navOffset() + 20) active = id;
    });
    root.querySelectorAll('[data-nav]').forEach(function(a){ a.classList.toggle('is-on', a.dataset.nav === active); });
    reveal();
  }
  window.addEventListener('scroll', onScroll, {passive:true});
  window.addEventListener('resize', reveal, {passive:true});
  onScroll(); reveal();
})();
</script>
<!-- ================= IMM BĐS QUỐC TẾ — KẾT THÚC KHỐI DÁN ================= -->
