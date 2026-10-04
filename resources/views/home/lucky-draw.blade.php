@extends('layouts.app')
@php
    $playStore = 'https://play.google.com/store/apps/details?id=com.gomeat.app';
    $appStore = 'https://apps.apple.com/us/app/gomeat/id1441921154';
    $endsLabel = $endsAt->format('j F Y, g:i A');
    $faqs = [
        [
            'q' => 'How do I enter the GoFeast Mega Lucky Draw?',
            'a' => 'Simply register an account on the GoFeast app. Placing orders through the app automatically increases your entry count.',
        ],
        [
            'q' => 'Is there any cost to join the lucky draw?',
            'a' => 'No, entering the GoFeast Mega Lucky Draw is 100% free for registered users.',
        ],
        [
            'q' => 'How are winners selected and announced?',
            'a' => 'Winners are selected via an automated, transparent random draw process and announced on our official social media channels and app notification center.',
        ],
        [
            'q' => 'When does the campaign end?',
            'a' => 'The contest runs till ' . $endsLabel . ' (Pakistan time).',
        ],
    ];
    $left = $secondsLeft;
    $initial = [
        'days' => intdiv($left, 86400),
        'hours' => intdiv($left % 86400, 3600),
        'mins' => intdiv($left % 3600, 60),
        'secs' => $left % 60,
    ];
@endphp

@section('meta_tags')
<title>GoFeast Mega WIN Lucky Draw | Order, Earn Entries & Win a Scooter</title>
<meta name="description" content="Join the official GoFeast Mega WIN Lucky Draw in Bahria Town Lahore. Sign up, order through the app and auto-enter to win a brand-new scooter, cashback, free delivery and GoFeast merch.">
<meta property="og:title" content="GoFeast Mega WIN Lucky Draw – Big Rewards Are Just a Tap Away!">
<meta property="og:description" content="Sign up, place your orders and auto-enter to win a brand-new scooter, cashback, free delivery and exciting merchandise.">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ route('luckydraw') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(fn ($f) => [
        '@type' => 'Question',
        'name' => $f['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
    ], $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endsection

@section('styles')
<style>
    .ld {
        --ld-primary: #bd3c49;
        --ld-primary-600: #a5303d;
        --ld-primary-800: #7d1f2b;
        --ld-ink: #24121a;
        --ld-ink-2: #5b4650;
        --ld-muted: #8a7480;
        --ld-cream: #fff7f4;
        --ld-blush: #fbe9e9;
        --ld-line: rgba(189, 60, 73, .14);
        --ld-gold: #ffc54d;
        --ld-gold-2: #ff9f2e;
        --ld-white: #fff;
        --ld-radius: 28px;
        --ld-shadow: 0 30px 60px -28px rgba(125, 31, 43, .45);
        font-family: 'Plus Jakarta Sans', system-ui, -apple-system, 'Segoe UI', sans-serif;
        color: var(--ld-ink);
        background: var(--ld-cream);
        /* clip (not hidden) so the sticky terms card still sticks */
        overflow-x: hidden;
        overflow-x: clip;
        position: relative;
    }

    .ld *,
    .ld *::before,
    .ld *::after {
        box-sizing: border-box;
    }

    .ld h1,
    .ld h2,
    .ld h3,
    .ld h4 {
        font-family: inherit;
        color: inherit;
        letter-spacing: -0.02em;
        margin: 0;
    }

    .ld p {
        margin: 0;
    }

    .ld a {
        text-decoration: none;
    }

    .ld-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 16px;
    }

    @media (min-width: 768px) {
        .ld-container {
            padding: 0 32px;
        }
    }

    .ld-section {
        padding: 96px 0;
        position: relative;
    }

    @media (max-width: 767px) {
        .ld-section {
            padding: 64px 0;
        }
    }

    .ld-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        border-radius: 999px;
        background: rgba(189, 60, 73, .08);
        color: var(--ld-primary);
        font-weight: 700;
        font-size: 13px;
        letter-spacing: .08em;
        text-transform: uppercase;
    }

    .ld-eyebrow .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ld-primary);
        box-shadow: 0 0 0 0 rgba(189, 60, 73, .5);
        animation: ld-pulse 1.8s infinite;
    }

    @keyframes ld-pulse {
        0% { box-shadow: 0 0 0 0 rgba(189, 60, 73, .55); }
        70% { box-shadow: 0 0 0 10px rgba(189, 60, 73, 0); }
        100% { box-shadow: 0 0 0 0 rgba(189, 60, 73, 0); }
    }

    .ld-title {
        font-size: clamp(32px, 4.4vw, 52px);
        font-weight: 800;
        line-height: 1.08;
    }

    .ld-lead {
        font-size: 17px;
        line-height: 1.75;
        color: var(--ld-ink-2);
    }

    /* ---------- Buttons ---------- */
    .ld-btn {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 16px 28px;
        border-radius: 999px;
        font-weight: 800;
        font-size: 15px;
        letter-spacing: .02em;
        border: 0;
        cursor: pointer;
        transition: transform .25s cubic-bezier(.2, .8, .2, 1), box-shadow .25s ease, background-color .25s ease, color .25s ease;
        will-change: transform;
        white-space: nowrap;
    }

    .ld-btn i {
        font-size: 19px;
    }

    .ld-btn-primary {
        color: #fff;
        background: linear-gradient(135deg, var(--ld-primary) 0%, var(--ld-primary-800) 100%);
        box-shadow: 0 18px 36px -14px rgba(189, 60, 73, .75), inset 0 1px 0 rgba(255, 255, 255, .25);
        overflow: hidden;
    }

    .ld-btn-primary::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(110deg, transparent 20%, rgba(255, 255, 255, .35) 45%, transparent 70%);
        transform: translateX(-120%);
        animation: ld-shine 3.2s ease-in-out infinite;
    }

    @keyframes ld-shine {
        0%, 55% { transform: translateX(-120%); }
        100% { transform: translateX(120%); }
    }

    .ld-btn-primary:hover,
    .ld-btn-primary:focus-visible {
        color: #fff;
        box-shadow: 0 24px 44px -14px rgba(189, 60, 73, .85), inset 0 1px 0 rgba(255, 255, 255, .25);
    }

    .ld-btn-ghost {
        color: var(--ld-primary);
        background: #fff;
        box-shadow: inset 0 0 0 2px var(--ld-line), 0 12px 28px -18px rgba(125, 31, 43, .5);
    }

    .ld-btn-ghost:hover,
    .ld-btn-ghost:focus-visible {
        color: var(--ld-primary-800);
        box-shadow: inset 0 0 0 2px var(--ld-primary), 0 16px 32px -18px rgba(125, 31, 43, .6);
    }

    .ld-btn-light {
        color: var(--ld-primary-800);
        background: #fff;
        box-shadow: 0 18px 36px -16px rgba(0, 0, 0, .45);
    }

    .ld-btn-light:hover,
    .ld-btn-light:focus-visible {
        color: var(--ld-primary);
        background: #fff;
    }

    .ld-btn-outline-light {
        color: #fff;
        background: rgba(255, 255, 255, .08);
        box-shadow: inset 0 0 0 2px rgba(255, 255, 255, .55);
    }

    .ld-btn-outline-light:hover,
    .ld-btn-outline-light:focus-visible {
        color: #fff;
        background: rgba(255, 255, 255, .18);
    }

    .ld-btn:focus-visible {
        outline: 3px solid var(--ld-gold);
        outline-offset: 3px;
    }

    @media (max-width: 420px) {
        .ld-btn {
            width: 100%;
            white-space: normal;
        }
    }

    /* ---------- Hero ---------- */
    .ld-hero {
        --sx: 70%;
        --sy: 30%;
        position: relative;
        padding: 72px 0 140px;
        background:
            radial-gradient(600px circle at var(--sx) var(--sy), rgba(255, 197, 77, .22), transparent 60%),
            radial-gradient(900px circle at 100% 0%, rgba(189, 60, 73, .16), transparent 55%),
            linear-gradient(180deg, #fff 0%, var(--ld-cream) 100%);
        overflow: hidden;
        isolation: isolate;
    }

    .ld-hero::before {
        content: '';
        position: absolute;
        inset: 0;
        z-index: -1;
        background-image: radial-gradient(rgba(189, 60, 73, .16) 1.2px, transparent 1.2px);
        background-size: 26px 26px;
        mask-image: radial-gradient(ellipse at 70% 30%, #000 0%, transparent 70%);
        -webkit-mask-image: radial-gradient(ellipse at 70% 30%, #000 0%, transparent 70%);
    }

    .ld-hero-grid {
        display: grid;
        grid-template-columns: 1.08fr .92fr;
        gap: 56px;
        align-items: center;
    }

    @media (max-width: 991px) {
        .ld-hero {
            padding: 48px 0 120px;
        }

        .ld-hero-grid {
            grid-template-columns: 1fr;
            gap: 48px;
        }
    }

    .ld-hero h1 {
        margin-top: 22px;
        font-size: clamp(38px, 6.2vw, 76px);
        font-weight: 800;
        line-height: 1.02;
        letter-spacing: -0.035em;
    }

    .ld-hero h1 .accent {
        display: inline-block;
        background: linear-gradient(100deg, var(--ld-primary) 0%, #e2566a 45%, var(--ld-gold-2) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        background-size: 200% 100%;
        animation: ld-gradient 6s ease-in-out infinite alternate;
    }

    @keyframes ld-gradient {
        from { background-position: 0% 50%; }
        to { background-position: 100% 50%; }
    }

    .ld-hero .ld-subtitle {
        margin-top: 20px;
        font-size: clamp(17px, 1.6vw, 20px);
        font-weight: 700;
        color: var(--ld-primary-800);
        line-height: 1.45;
    }

    .ld-hero .ld-lead {
        margin-top: 16px;
        max-width: 560px;
    }

    .ld-hero .ld-lead strong {
        color: var(--ld-ink);
    }

    .ld-hero-ctas {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-top: 32px;
    }

    .ld-trust {
        display: flex;
        flex-wrap: wrap;
        gap: 10px 22px;
        margin-top: 28px;
        color: var(--ld-muted);
        font-size: 14px;
        font-weight: 600;
    }

    .ld-trust span {
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .ld-trust i {
        color: var(--ld-primary);
        font-size: 17px;
    }

    /* Hero visual: golden ticket with orbiting prize chips */
    .ld-stage {
        position: relative;
        aspect-ratio: 1 / 1;
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
    }

    .ld-stage .ring {
        position: absolute;
        inset: 6%;
        border-radius: 50%;
        border: 2px dashed rgba(189, 60, 73, .22);
        animation: ld-spin 40s linear infinite;
    }

    .ld-stage .ring.two {
        inset: 18%;
        border-style: solid;
        border-color: rgba(189, 60, 73, .1);
        animation-duration: 60s;
        animation-direction: reverse;
    }

    @keyframes ld-spin {
        to { transform: rotate(360deg); }
    }

    .ld-stage .glow {
        position: absolute;
        inset: 22%;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(255, 197, 77, .55), rgba(189, 60, 73, .25) 55%, transparent 72%);
        filter: blur(18px);
    }

    .ld-layer {
        position: absolute;
        transition: transform .35s cubic-bezier(.2, .8, .2, 1);
        will-change: transform;
    }

    .ld-ticket-wrap {
        inset: 0;
        display: grid;
        place-items: center;
    }

    .ld-ticket {
        position: relative;
        width: 74%;
        aspect-ratio: 1.55 / 1;
        border-radius: 26px;
        padding: 7% 8%;
        color: #fff;
        background:
            radial-gradient(circle at 0 50%, var(--ld-cream) 0 13px, transparent 14px),
            radial-gradient(circle at 100% 50%, var(--ld-cream) 0 13px, transparent 14px),
            linear-gradient(135deg, #d24a58 0%, var(--ld-primary) 40%, var(--ld-primary-800) 100%);
        box-shadow: 0 40px 70px -30px rgba(125, 31, 43, .75), inset 0 1px 0 rgba(255, 255, 255, .3);
        transform: rotate(-8deg);
        animation: ld-float 6s ease-in-out infinite;
        overflow: hidden;
    }

    .ld-ticket::before {
        content: '';
        position: absolute;
        top: 10%;
        bottom: 10%;
        right: 30%;
        border-right: 2px dashed rgba(255, 255, 255, .35);
    }

    .ld-ticket::after {
        content: '';
        position: absolute;
        inset: -40%;
        background: conic-gradient(from 0deg, transparent 0 70%, rgba(255, 255, 255, .22) 80%, transparent 90%);
        animation: ld-spin 7s linear infinite;
    }

    @keyframes ld-float {
        0%, 100% { translate: 0 0; }
        50% { translate: 0 -14px; }
    }

    .ld-ticket .t-label {
        position: relative;
        z-index: 1;
        font-size: clamp(10px, 1.2vw, 12px);
        font-weight: 700;
        letter-spacing: .22em;
        text-transform: uppercase;
        opacity: .85;
    }

    .ld-ticket .t-title {
        position: relative;
        z-index: 1;
        margin-top: 6%;
        font-size: clamp(28px, 4.4vw, 50px);
        font-weight: 800;
        line-height: .95;
        letter-spacing: -0.03em;
    }

    .ld-ticket .t-title span {
        color: var(--ld-gold);
    }

    .ld-ticket .t-sub {
        position: relative;
        z-index: 1;
        margin-top: 6%;
        font-size: clamp(11px, 1.3vw, 14px);
        font-weight: 600;
        opacity: .9;
    }

    .ld-ticket .t-stub {
        position: absolute;
        z-index: 1;
        right: 7%;
        top: 50%;
        transform: translateY(-50%);
        display: grid;
        place-items: center;
        width: 17%;
        aspect-ratio: 1;
        border-radius: 50%;
        background: var(--ld-gold);
        color: var(--ld-primary-800);
        font-size: clamp(18px, 2.6vw, 30px);
        box-shadow: 0 10px 20px -8px rgba(0, 0, 0, .35);
    }

    .ld-chip {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 16px 10px 10px;
        border-radius: 999px;
        background: rgba(255, 255, 255, .9);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        box-shadow: 0 18px 40px -20px rgba(125, 31, 43, .55), inset 0 0 0 1px rgba(189, 60, 73, .1);
        font-weight: 700;
        font-size: 14px;
        color: var(--ld-ink);
        white-space: nowrap;
        animation: ld-bob 5s ease-in-out infinite;
    }

    .ld-chip .ic {
        display: grid;
        place-items: center;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        color: #fff;
        background: linear-gradient(135deg, var(--ld-primary), var(--ld-primary-800));
        font-size: 17px;
    }

    .ld-chip .ic.gold {
        color: var(--ld-primary-800);
        background: linear-gradient(135deg, var(--ld-gold), var(--ld-gold-2));
    }

    .ld-chip small {
        display: block;
        font-size: 11px;
        font-weight: 600;
        color: var(--ld-muted);
    }

    @keyframes ld-bob {
        0%, 100% { translate: 0 0; }
        50% { translate: 0 -8px; }
    }

    .ld-chip-1 { top: 6%; left: 0; }
    .ld-chip-2 { top: 20%; right: -2%; animation-delay: -1.5s; }
    .ld-chip-3 { bottom: 12%; left: 4%; animation-delay: -3s; }
    .ld-chip-4 { bottom: 4%; right: 6%; animation-delay: -2s; }

    @media (max-width: 575px) {
        .ld-chip {
            font-size: 12px;
            padding: 8px 12px 8px 8px;
        }

        .ld-chip .ic {
            width: 28px;
            height: 28px;
            font-size: 14px;
        }

        .ld-chip small {
            display: none;
        }

        .ld-chip-2 { right: 0; }
    }

    .ld-confetti {
        position: absolute;
        width: 10px;
        height: 16px;
        border-radius: 3px;
        animation: ld-bob 4s ease-in-out infinite;
    }

    /* ---------- Countdown ---------- */
    .ld-countdown-wrap {
        position: relative;
        z-index: 2;
        margin-top: -92px;
    }

    .ld-countdown {
        position: relative;
        display: grid;
        grid-template-columns: auto 1fr auto;
        align-items: center;
        gap: 32px;
        padding: 30px 36px;
        border-radius: var(--ld-radius);
        color: #fff;
        background:
            radial-gradient(500px circle at 0% 0%, rgba(255, 197, 77, .25), transparent 60%),
            linear-gradient(135deg, var(--ld-primary) 0%, var(--ld-primary-800) 100%);
        box-shadow: var(--ld-shadow);
        overflow: hidden;
    }

    .ld-countdown::after {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(255, 255, 255, .12) 1px, transparent 1px);
        background-size: 18px 18px;
        pointer-events: none;
    }

    .ld-countdown > * {
        position: relative;
        z-index: 1;
    }

    .ld-countdown .cd-label {
        font-weight: 800;
        font-size: 20px;
        line-height: 1.25;
    }

    .ld-countdown .cd-label small {
        display: block;
        margin-top: 4px;
        font-size: 13px;
        font-weight: 600;
        opacity: .8;
        letter-spacing: .04em;
    }

    .ld-timer {
        display: flex;
        justify-content: center;
        gap: 12px;
    }

    .ld-unit {
        min-width: 86px;
        padding: 12px 8px 10px;
        border-radius: 18px;
        text-align: center;
        background: rgba(255, 255, 255, .12);
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, .18);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
    }

    .ld-unit .num {
        display: block;
        font-size: 40px;
        font-weight: 800;
        line-height: 1;
        font-variant-numeric: tabular-nums;
    }

    .ld-unit .num.tick {
        animation: ld-tick .45s cubic-bezier(.2, .8, .2, 1);
    }

    @keyframes ld-tick {
        0% { transform: translateY(-40%); opacity: 0; }
        100% { transform: translateY(0); opacity: 1; }
    }

    .ld-unit .lbl {
        display: block;
        margin-top: 6px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .16em;
        text-transform: uppercase;
        opacity: .8;
    }

    .ld-timer-ended {
        font-size: 20px;
        font-weight: 800;
        text-align: center;
    }

    @media (max-width: 991px) {
        .ld-countdown {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 22px;
            padding: 28px 18px;
        }
    }

    @media (max-width: 480px) {
        .ld-timer {
            gap: 8px;
        }

        .ld-unit {
            min-width: 0;
            flex: 1;
            padding: 10px 4px 8px;
            border-radius: 14px;
        }

        .ld-unit .num {
            font-size: 28px;
        }

        .ld-unit .lbl {
            font-size: 9px;
            letter-spacing: .1em;
        }
    }

    /* ---------- Marquee ---------- */
    .ld-marquee {
        margin-top: 64px;
        padding: 18px 0;
        background: var(--ld-ink);
        color: #fff;
        transform: rotate(-1.5deg) scale(1.02);
        overflow: hidden;
    }

    .ld-marquee-track {
        display: flex;
        gap: 48px;
        width: max-content;
        animation: ld-marquee 30s linear infinite;
    }

    .ld-marquee span {
        display: inline-flex;
        align-items: center;
        gap: 14px;
        font-weight: 800;
        font-size: 20px;
        letter-spacing: .02em;
        white-space: nowrap;
    }

    .ld-marquee i {
        color: var(--ld-gold);
    }

    @keyframes ld-marquee {
        to { transform: translateX(-50%); }
    }

    /* ---------- Prizes ---------- */
    .ld-head {
        max-width: 680px;
        margin: 0 auto 48px;
        text-align: center;
    }

    .ld-head .ld-title {
        margin-top: 14px;
    }

    .ld-head .ld-lead {
        margin-top: 14px;
    }

    .ld-grand {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
        border-radius: 34px;
        overflow: hidden;
        background: #fff;
        box-shadow: var(--ld-shadow), inset 0 0 0 1px var(--ld-line);
    }

    @media (max-width: 991px) {
        .ld-grand {
            grid-template-columns: 1fr;
        }
    }

    .ld-grand-visual {
        position: relative;
        min-height: 360px;
        display: grid;
        place-items: center;
        background:
            radial-gradient(420px circle at 50% 60%, rgba(255, 197, 77, .4), transparent 65%),
            linear-gradient(140deg, #d24a58 0%, var(--ld-primary) 45%, var(--ld-primary-800) 100%);
        overflow: hidden;
    }

    .ld-grand-visual::before {
        content: '';
        position: absolute;
        inset: 0;
        background: repeating-conic-gradient(from 0deg at 50% 70%, rgba(255, 255, 255, .07) 0 8deg, transparent 8deg 16deg);
        animation: ld-spin 80s linear infinite;
    }

    .ld-grand-badge {
        position: absolute;
        top: 22px;
        left: 22px;
        z-index: 2;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 16px;
        border-radius: 999px;
        background: var(--ld-gold);
        color: var(--ld-primary-800);
        font-weight: 800;
        font-size: 13px;
        letter-spacing: .1em;
        text-transform: uppercase;
        box-shadow: 0 12px 24px -12px rgba(0, 0, 0, .5);
    }

    .ld-scooter {
        position: relative;
        z-index: 1;
        width: min(86%, 420px);
        height: auto;
        filter: drop-shadow(0 24px 30px rgba(0, 0, 0, .3));
        animation: ld-float 5s ease-in-out infinite;
    }

    .ld-scooter .wheel {
        transform-box: fill-box;
        transform-origin: center;
        animation: ld-spin 3s linear infinite;
    }

    .ld-grand-body {
        padding: 48px 44px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 22px;
    }

    @media (max-width: 575px) {
        .ld-grand-body {
            padding: 32px 22px;
        }

        .ld-grand-visual {
            min-height: 260px;
        }
    }

    .ld-grand-body h3 {
        font-size: clamp(28px, 3.4vw, 40px);
        font-weight: 800;
        line-height: 1.1;
    }

    .ld-grand-body h3 span {
        color: var(--ld-primary);
    }

    .ld-detail {
        display: grid;
        grid-template-columns: 48px 1fr;
        gap: 16px;
        align-items: start;
        padding: 18px;
        border-radius: 20px;
        background: var(--ld-cream);
    }

    .ld-detail .ic {
        display: grid;
        place-items: center;
        width: 48px;
        height: 48px;
        border-radius: 14px;
        color: #fff;
        font-size: 22px;
        background: linear-gradient(135deg, var(--ld-primary), var(--ld-primary-800));
    }

    .ld-detail h4 {
        font-size: 16px;
        font-weight: 800;
        margin-bottom: 4px;
    }

    .ld-detail p {
        color: var(--ld-ink-2);
        line-height: 1.6;
        font-size: 15px;
    }

    .ld-subhead {
        margin: 72px 0 28px;
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .ld-subhead h3 {
        font-size: clamp(24px, 2.6vw, 30px);
        font-weight: 800;
        white-space: nowrap;
    }

    .ld-subhead::after {
        content: '';
        flex: 1;
        height: 2px;
        background: linear-gradient(90deg, var(--ld-line), transparent);
    }

    @media (max-width: 480px) {
        .ld-subhead h3 {
            white-space: normal;
        }
    }

    .ld-rewards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    @media (max-width: 991px) {
        .ld-rewards {
            grid-template-columns: 1fr;
        }
    }

    /* Card with mouse-tracked spotlight + 3D tilt */
    .ld-card {
        --mx: 50%;
        --my: 50%;
        --rx: 0deg;
        --ry: 0deg;
        position: relative;
        padding: 32px 28px;
        border-radius: var(--ld-radius);
        background: #fff;
        box-shadow: 0 24px 50px -32px rgba(125, 31, 43, .5), inset 0 0 0 1px var(--ld-line);
        transform: perspective(900px) rotateX(var(--rx)) rotateY(var(--ry));
        transition: transform .25s cubic-bezier(.2, .8, .2, 1), box-shadow .3s ease;
        overflow: hidden;
        isolation: isolate;
    }

    .ld-card::before {
        content: '';
        position: absolute;
        inset: 0;
        z-index: -1;
        background: radial-gradient(360px circle at var(--mx) var(--my), rgba(189, 60, 73, .12), transparent 60%);
        opacity: 0;
        transition: opacity .3s ease;
    }

    .ld-card:hover {
        box-shadow: 0 36px 60px -30px rgba(125, 31, 43, .55), inset 0 0 0 1px rgba(189, 60, 73, .3);
    }

    .ld-card:hover::before {
        opacity: 1;
    }

    .ld-card .ic {
        display: grid;
        place-items: center;
        width: 60px;
        height: 60px;
        border-radius: 18px;
        font-size: 28px;
        color: #fff;
        background: linear-gradient(135deg, var(--ld-primary), var(--ld-primary-800));
        box-shadow: 0 16px 28px -14px rgba(189, 60, 73, .8);
        margin-bottom: 22px;
    }

    .ld-card .ic.gold {
        color: var(--ld-primary-800);
        background: linear-gradient(135deg, var(--ld-gold), var(--ld-gold-2));
        box-shadow: 0 16px 28px -14px rgba(255, 159, 46, .8);
    }

    .ld-card h4 {
        font-size: 20px;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .ld-card p {
        color: var(--ld-ink-2);
        line-height: 1.65;
        font-size: 15px;
    }

    .ld-card .tag {
        position: absolute;
        top: 24px;
        right: 24px;
        padding: 5px 12px;
        border-radius: 999px;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--ld-primary);
        background: rgba(189, 60, 73, .08);
    }

    /* ---------- Steps ---------- */
    .ld-steps-bg {
        background: #fff;
    }

    .ld-steps {
        position: relative;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        counter-reset: step;
    }

    .ld-steps::before {
        content: '';
        position: absolute;
        top: 64px;
        left: 16%;
        right: 16%;
        height: 2px;
        background-image: linear-gradient(90deg, var(--ld-primary) 50%, transparent 50%);
        background-size: 14px 2px;
        opacity: .35;
    }

    @media (max-width: 991px) {
        .ld-steps {
            grid-template-columns: 1fr;
        }

        .ld-steps::before {
            display: none;
        }
    }

    .ld-step {
        position: relative;
        text-align: center;
        padding: 36px 26px 32px;
        background: var(--ld-cream);
    }

    .ld-step .num {
        position: relative;
        display: grid;
        place-items: center;
        width: 64px;
        height: 64px;
        margin: 0 auto 22px;
        border-radius: 50%;
        font-size: 24px;
        font-weight: 800;
        color: #fff;
        background: linear-gradient(135deg, var(--ld-primary), var(--ld-primary-800));
        box-shadow: 0 0 0 8px #fff, 0 0 0 9px var(--ld-line), 0 18px 30px -12px rgba(189, 60, 73, .7);
    }

    .ld-step .num i {
        position: absolute;
        right: -10px;
        bottom: -6px;
        display: grid;
        place-items: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        font-size: 15px;
        color: var(--ld-primary-800);
        background: var(--ld-gold);
        box-shadow: 0 0 0 3px #fff;
    }

    .ld-step h4 {
        font-size: 20px;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .ld-step p {
        color: var(--ld-ink-2);
        line-height: 1.65;
        font-size: 15px;
    }

    .ld-step p strong {
        color: var(--ld-primary);
    }

    .ld-steps-cta {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 14px;
        margin-top: 48px;
    }

    /* ---------- FAQ + Terms ---------- */
    .ld-faq-grid {
        display: grid;
        grid-template-columns: 1.15fr .85fr;
        gap: 32px;
        align-items: start;
    }

    @media (max-width: 991px) {
        .ld-faq-grid {
            grid-template-columns: 1fr;
        }
    }

    .ld-faq {
        display: grid;
        gap: 14px;
    }

    .ld-faq details {
        border-radius: 22px;
        background: #fff;
        box-shadow: 0 18px 40px -32px rgba(125, 31, 43, .5), inset 0 0 0 1px var(--ld-line);
        transition: box-shadow .25s ease;
    }

    .ld-faq details[open] {
        box-shadow: 0 24px 50px -30px rgba(125, 31, 43, .55), inset 0 0 0 2px rgba(189, 60, 73, .35);
    }

    .ld-faq summary {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 22px 24px;
        font-weight: 800;
        font-size: 17px;
        line-height: 1.4;
        list-style: none;
        cursor: pointer;
    }

    .ld-faq summary::-webkit-details-marker {
        display: none;
    }

    .ld-faq summary .q {
        flex-shrink: 0;
        display: grid;
        place-items: center;
        width: 36px;
        height: 36px;
        border-radius: 12px;
        font-size: 13px;
        color: var(--ld-primary);
        background: rgba(189, 60, 73, .08);
    }

    .ld-faq summary .plus {
        flex-shrink: 0;
        margin-left: auto;
        display: grid;
        place-items: center;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        color: #fff;
        background: var(--ld-primary);
        font-size: 18px;
        transition: transform .3s cubic-bezier(.2, .8, .2, 1);
    }

    .ld-faq details[open] summary .plus {
        transform: rotate(45deg);
    }

    .ld-faq summary:focus-visible {
        outline: 3px solid var(--ld-primary);
        outline-offset: -3px;
        border-radius: 22px;
    }

    .ld-faq .a {
        padding: 0 24px 24px 76px;
        color: var(--ld-ink-2);
        line-height: 1.7;
        font-size: 15.5px;
    }

    @media (max-width: 575px) {
        .ld-faq summary {
            padding: 18px;
            font-size: 16px;
        }

        .ld-faq .a {
            padding: 0 18px 20px;
        }
    }

    .ld-terms {
        position: sticky;
        top: 24px;
        padding: 34px 30px;
        border-radius: var(--ld-radius);
        color: #fff;
        background:
            radial-gradient(420px circle at 100% 0%, rgba(255, 197, 77, .18), transparent 60%),
            var(--ld-ink);
        box-shadow: var(--ld-shadow);
    }

    .ld-terms h3 {
        font-size: 22px;
        font-weight: 800;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .ld-terms h3 i {
        color: var(--ld-gold);
    }

    .ld-terms ul {
        list-style: none;
        margin: 24px 0 0;
        padding: 0;
        display: grid;
        gap: 18px;
    }

    .ld-terms li {
        display: grid;
        grid-template-columns: 26px 1fr;
        gap: 12px;
        line-height: 1.6;
        font-size: 14.5px;
        color: rgba(255, 255, 255, .78);
    }

    .ld-terms li i {
        color: var(--ld-gold);
        font-size: 20px;
        line-height: 1.2;
    }

    .ld-terms li strong {
        display: block;
        color: #fff;
        font-size: 15px;
    }

    /* ---------- Final CTA ---------- */
    .ld-final {
        position: relative;
        padding: 72px 40px;
        border-radius: 36px;
        text-align: center;
        color: #fff;
        background:
            radial-gradient(500px circle at 15% 20%, rgba(255, 197, 77, .3), transparent 60%),
            radial-gradient(600px circle at 90% 100%, rgba(255, 255, 255, .12), transparent 60%),
            linear-gradient(135deg, var(--ld-primary) 0%, var(--ld-primary-800) 100%);
        box-shadow: var(--ld-shadow);
        overflow: hidden;
        isolation: isolate;
    }

    .ld-final::before {
        content: '';
        position: absolute;
        inset: 0;
        z-index: -1;
        background-image: radial-gradient(rgba(255, 255, 255, .14) 1px, transparent 1px);
        background-size: 22px 22px;
    }

    .ld-final h2 {
        font-size: clamp(30px, 4.6vw, 56px);
        font-weight: 800;
        line-height: 1.05;
        letter-spacing: -0.03em;
    }

    .ld-final p {
        max-width: 560px;
        margin: 18px auto 0;
        font-size: 17px;
        line-height: 1.7;
        opacity: .9;
    }

    .ld-final .ld-hero-ctas {
        justify-content: center;
    }

    @media (max-width: 575px) {
        .ld-final {
            padding: 52px 20px;
            border-radius: 28px;
        }
    }

    /* ---------- Scroll reveal ---------- */
    .ld.js .ld-reveal {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity .8s cubic-bezier(.2, .8, .2, 1), transform .8s cubic-bezier(.2, .8, .2, 1);
        transition-delay: var(--d, 0s);
    }

    .ld.js .ld-reveal.is-in {
        opacity: 1;
        transform: none;
    }

    /* ---------- Custom cursor (mouse devices only, see script) ---------- */
    .ld.has-cursor,
    .ld.has-cursor a,
    .ld.has-cursor button,
    .ld.has-cursor summary {
        cursor: none;
    }

    .ld-cursor-dot,
    .ld-cursor-ring {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        pointer-events: none;
        border-radius: 50%;
        opacity: 0;
        transition: opacity .25s ease;
    }

    .ld-cursor-dot {
        width: 8px;
        height: 8px;
        margin: -4px 0 0 -4px;
        background: var(--ld-primary, #bd3c49);
    }

    .ld-cursor-ring {
        display: grid;
        place-items: center;
        width: 40px;
        height: 40px;
        margin: -20px 0 0 -20px;
        border: 2px solid rgba(189, 60, 73, .55);
        transition: opacity .25s ease, width .3s cubic-bezier(.2, .8, .2, 1), height .3s cubic-bezier(.2, .8, .2, 1), margin .3s cubic-bezier(.2, .8, .2, 1), background-color .3s ease, border-color .3s ease;
        font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: #fff;
    }

    .ld-cursor-ring span {
        opacity: 0;
        transition: opacity .2s ease;
    }

    .ld-cursor-on .ld-cursor-dot,
    .ld-cursor-on .ld-cursor-ring {
        opacity: 1;
    }

    .ld-cursor-hover .ld-cursor-ring {
        width: 64px;
        height: 64px;
        margin: -32px 0 0 -32px;
        border-color: transparent;
        background: rgba(189, 60, 73, .16);
    }

    .ld-cursor-label .ld-cursor-ring {
        width: 84px;
        height: 84px;
        margin: -42px 0 0 -42px;
        border-color: transparent;
        background: #bd3c49;
        box-shadow: 0 14px 30px -10px rgba(189, 60, 73, .7);
    }

    .ld-cursor-label .ld-cursor-ring span {
        opacity: 1;
    }

    .ld-cursor-label .ld-cursor-dot,
    .ld-cursor-hover .ld-cursor-dot {
        opacity: 0;
    }

    .ld-cursor-down .ld-cursor-ring {
        transform: scale(.85);
    }

    .ld-spark {
        position: absolute;
        z-index: 0;
        width: 8px;
        height: 8px;
        border-radius: 2px;
        pointer-events: none;
        animation: ld-spark .9s ease-out forwards;
    }

    @keyframes ld-spark {
        from { opacity: .9; transform: translate(0, 0) rotate(0deg) scale(1); }
        to { opacity: 0; transform: translate(var(--tx), var(--ty)) rotate(220deg) scale(.3); }
    }

    .ld-burst {
        position: fixed;
        z-index: 9998;
        width: 9px;
        height: 14px;
        border-radius: 2px;
        pointer-events: none;
    }

    @media (prefers-reduced-motion: reduce) {
        .ld *,
        .ld *::before,
        .ld *::after {
            animation: none !important;
            transition: none !important;
        }

        .ld.js .ld-reveal {
            opacity: 1;
            transform: none;
        }
    }
</style>
@endsection

@section('content')
<main class="ld" id="luckyDraw" data-end="{{ $endsAt->toIso8601String() }}">

    {{-- ================= HERO ================= --}}
    <section class="ld-hero" id="ldHero">
        <div class="ld-container">
            <div class="ld-hero-grid">
                <div>
                    <span class="ld-eyebrow ld-reveal"><span class="dot"></span> Mega WIN Lucky Draw is live</span>
                    <h1 class="ld-reveal" style="--d:.08s">BIG REWARDS ARE JUST <span class="accent">A TAP AWAY!</span></h1>
                    <p class="ld-subtitle ld-reveal" style="--d:.16s">Official GoFeast Mega WIN Lucky Draw – Order, Earn Entries &amp; Win Big!</p>
                    <p class="ld-lead ld-reveal" style="--d:.24s">Say hello to GoFeast, your new favorite food delivery and marketplace app.</p>
                    <p class="ld-lead ld-reveal" style="--d:.3s">Sign up today, place your orders, and auto-enter our lucky draw to win a <strong>brand-new electric scooter</strong>, <strong>cashback</strong>, <strong>free delivery</strong>, and exciting <strong>merchandise</strong>!</p>
                    <div class="ld-hero-ctas ld-reveal" style="--d:.38s">
                        <a href="{{ $playStore }}" target="_blank" rel="noopener" class="ld-btn ld-btn-primary" data-app-link data-magnetic data-burst data-cursor-label="Win!">
                            <i class="uil uil-ticket"></i> ENTER LUCKY DRAW TODAY
                        </a>
                        <a href="#how-to-enter" class="ld-btn ld-btn-ghost" data-magnetic>
                            How it works <i class="uil uil-arrow-down"></i>
                        </a>
                    </div>
                    <div class="ld-trust ld-reveal" style="--d:.46s">
                        <span><i class="uil uil-check-circle"></i> 100% free to enter</span>
                        <span><i class="uil uil-shield-check"></i> Transparent random draw</span>
                        <span><i class="uil uil-map-marker"></i> Bahria Town Lahore</span>
                    </div>
                </div>

                <div class="ld-stage ld-reveal" style="--d:.2s" aria-hidden="true">
                    <div class="ring"></div>
                    <div class="ring two"></div>
                    <div class="glow"></div>
                    <div class="ld-layer ld-ticket-wrap" data-depth="18">
                        <div class="ld-ticket">
                            <div class="t-label">GoFeast · Official Draw</div>
                            <div class="t-title">MEGA<br><span>WIN</span></div>
                            <div class="t-sub">Order. Earn entries. Win big.</div>
                            <div class="t-stub"><i class="uil uil-trophy"></i></div>
                        </div>
                    </div>
                    <div class="ld-layer ld-chip-1" data-depth="-30">
                        <div class="ld-chip"><span class="ic gold"><i class="uil uil-trophy"></i></span><span>Brand-New Scooter<small>Grand prize</small></span></div>
                    </div>
                    <div class="ld-layer ld-chip-2" data-depth="34">
                        <div class="ld-chip"><span class="ic"><i class="uil uil-wallet"></i></span><span>Cashback<small>On every order</small></span></div>
                    </div>
                    <div class="ld-layer ld-chip-3" data-depth="26">
                        <div class="ld-chip"><span class="ic"><i class="uil uil-truck"></i></span><span>Free Delivery<small>Perks</small></span></div>
                    </div>
                    <div class="ld-layer ld-chip-4" data-depth="-22">
                        <div class="ld-chip"><span class="ic gold"><i class="uil uil-gift"></i></span><span>GoFeast Goodies<small>Merch kits</small></span></div>
                    </div>
                    <div class="ld-layer" style="top:42%;left:6%" data-depth="40"><span class="ld-confetti" style="background:#ffc54d;transform:rotate(25deg)"></span></div>
                    <div class="ld-layer" style="top:10%;right:30%" data-depth="-36"><span class="ld-confetti" style="background:#bd3c49;transform:rotate(-30deg);animation-delay:-1s"></span></div>
                    <div class="ld-layer" style="bottom:28%;right:2%" data-depth="30"><span class="ld-confetti" style="background:#ff9f2e;transform:rotate(60deg);animation-delay:-2s"></span></div>
                    <div class="ld-layer" style="bottom:2%;left:40%" data-depth="-26"><span class="ld-confetti" style="background:#7d1f2b;transform:rotate(-12deg);animation-delay:-3s"></span></div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= COUNTDOWN ================= --}}
    <div class="ld-container ld-countdown-wrap">
        <div class="ld-countdown ld-reveal" role="timer" aria-live="off">
            <div class="cd-label">Hurry! Current Draw Ends In<small>{{ $endsLabel }} (PKT)</small></div>
            <div class="ld-timer" id="ldTimer" @if($secondsLeft <= 0) hidden @endif>
                <div class="ld-unit"><span class="num" data-unit="days">{{ sprintf('%02d', $initial['days']) }}</span><span class="lbl">Days</span></div>
                <div class="ld-unit"><span class="num" data-unit="hours">{{ sprintf('%02d', $initial['hours']) }}</span><span class="lbl">Hours</span></div>
                <div class="ld-unit"><span class="num" data-unit="mins">{{ sprintf('%02d', $initial['mins']) }}</span><span class="lbl">Mins</span></div>
                <div class="ld-unit"><span class="num" data-unit="secs">{{ sprintf('%02d', $initial['secs']) }}</span><span class="lbl">Secs</span></div>
            </div>
            <div class="ld-timer-ended" id="ldEnded" @if($secondsLeft > 0) hidden @endif>This draw has ended. Winners will be announced soon!</div>
            <a href="{{ $playStore }}" target="_blank" rel="noopener" class="ld-btn ld-btn-light" data-app-link data-magnetic data-burst data-cursor-label="Go!">
                <i class="uil uil-mobile-android"></i> Download GoFeast now!
            </a>
        </div>
    </div>

    {{-- ================= MARQUEE ================= --}}
    <div class="ld-marquee" aria-hidden="true">
        <div class="ld-marquee-track">
            @for($i = 0; $i < 2; $i++)
            <span><i class="uil uil-star"></i> Brand-New Scooter</span>
            <span><i class="uil uil-star"></i> Cashback on Every Order</span>
            <span><i class="uil uil-star"></i> Free Delivery Perks</span>
            <span><i class="uil uil-star"></i> Smart Mugs &amp; Tumblers</span>
            <span><i class="uil uil-star"></i> Electric Kettles</span>
            <span><i class="uil uil-star"></i> Merch Kits</span>
            @endfor
        </div>
    </div>

    {{-- ================= PRIZES ================= --}}
    <section class="ld-section" id="prizes">
        <div class="ld-container">
            <div class="ld-head ld-reveal">
                <span class="ld-eyebrow"><i class="uil uil-gift"></i> The prizes</span>
                <h2 class="ld-title">Rewards worth tapping for</h2>
                <p class="ld-lead">One grand prize, plus rewards that land with every order you place.</p>
            </div>

            <div class="ld-grand ld-reveal">
                <div class="ld-grand-visual">
                    <span class="ld-grand-badge"><i class="uil uil-trophy"></i> Grand Prize</span>
                    <svg class="ld-scooter" viewBox="0 0 340 220" fill="none" aria-hidden="true">
                        <ellipse cx="170" cy="200" rx="140" ry="9" fill="rgba(0,0,0,.18)" />
                        <g class="wheel">
                            <circle cx="72" cy="160" r="34" stroke="#fff" stroke-width="10" />
                            <circle cx="72" cy="160" r="11" fill="#ffc54d" />
                            <path d="M72 132v56M44 160h56" stroke="#fff" stroke-width="3" stroke-linecap="round" opacity=".55" />
                        </g>
                        <g class="wheel">
                            <circle cx="268" cy="160" r="34" stroke="#fff" stroke-width="10" />
                            <circle cx="268" cy="160" r="11" fill="#ffc54d" />
                            <path d="M268 132v56M240 160h56" stroke="#fff" stroke-width="3" stroke-linecap="round" opacity=".55" />
                        </g>
                        <path d="M54 128c6-18 22-28 44-28h96c12 0 20 6 24 16l14 38H112c-22 0-40-10-58-26Z" fill="#fff" />
                        <path d="M118 154h104" stroke="#bd3c49" stroke-width="5" stroke-linecap="round" opacity=".35" />
                        <rect x="88" y="82" width="80" height="18" rx="9" fill="#24121a" />
                        <path d="M220 118 246 36" stroke="#fff" stroke-width="11" stroke-linecap="round" />
                        <path d="M246 44 268 160" stroke="#fff" stroke-width="9" stroke-linecap="round" />
                        <path d="M228 34h40" stroke="#24121a" stroke-width="9" stroke-linecap="round" />
                        <circle cx="256" cy="58" r="8" fill="#ffc54d" />
                        <path d="M262 52c10 2 18 8 22 16" stroke="#ffc54d" stroke-width="3" stroke-linecap="round" opacity=".7" />
                    </svg>
                </div>
                <div class="ld-grand-body">
                    <h3>Grand Prize: <span>Brand-New Scooter</span></h3>
                    <div class="ld-detail">
                        <span class="ic"><i class="uil uil-bolt-alt"></i></span>
                        <div>
                            <h4>Prize Details</h4>
                            <p>A sleek, high-efficiency brand-new scooter to upgrade your daily commute.</p>
                        </div>
                    </div>
                    <div class="ld-detail">
                        <span class="ic"><i class="uil uil-ticket"></i></span>
                        <div>
                            <h4>How to qualify</h4>
                            <p>Every GoFeast app signup and order earns you entries toward the Grand Prize drawing.</p>
                        </div>
                    </div>
                    <div>
                        <a href="{{ $playStore }}" target="_blank" rel="noopener" class="ld-btn ld-btn-primary" data-app-link data-magnetic data-burst data-cursor-label="Win!">
                            <i class="uil uil-ticket"></i> Get my entries
                        </a>
                    </div>
                </div>
            </div>

            <div class="ld-subhead ld-reveal">
                <h3>Runner-Up &amp; Weekly Rewards</h3>
            </div>

            <div class="ld-rewards">
                <article class="ld-card ld-reveal" data-tilt>
                    <span class="tag">Every order</span>
                    <span class="ic"><i class="uil uil-wallet"></i></span>
                    <h4>Cashback on EVERY Order</h4>
                    <p>Instant cashback credited to your GoFeast Wallet every time you order.</p>
                </article>
                <article class="ld-card ld-reveal" style="--d:.1s" data-tilt>
                    <span class="tag">First 3 orders</span>
                    <span class="ic gold"><i class="uil uil-truck"></i></span>
                    <h4>Free Delivery Perks</h4>
                    <p>Get discounts on your first 3 orders.</p>
                </article>
                <article class="ld-card ld-reveal" style="--d:.2s" data-tilt>
                    <span class="tag">Weekly</span>
                    <span class="ic"><i class="uil uil-gift"></i></span>
                    <h4>Exclusive GoFeast Goodies</h4>
                    <p>Branded smart mugs, electric kettles, tumblers, and merch kits.</p>
                </article>
            </div>
        </div>
    </section>

    {{-- ================= HOW TO PARTICIPATE ================= --}}
    <section class="ld-section ld-steps-bg" id="how-to-enter">
        <div class="ld-container">
            <div class="ld-head ld-reveal">
                <span class="ld-eyebrow"><i class="uil uil-list-ol"></i> Step-by-step</span>
                <h2 class="ld-title">How to participate</h2>
                <p class="ld-lead">Three simple steps between you and the Mega WIN draw.</p>
            </div>

            <div class="ld-steps">
                <article class="ld-card ld-step ld-reveal" data-tilt>
                    <span class="num">1<i class="uil uil-mobile-android"></i></span>
                    <h4>Download &amp; Register</h4>
                    <p>Download the GoFeast app on iOS or Android and sign up. Add your referral code.</p>
                </article>
                <article class="ld-card ld-step ld-reveal" style="--d:.12s" data-tilt>
                    <span class="num">2<i class="uil uil-shopping-bag"></i></span>
                    <h4>Order Your Favorites</h4>
                    <p>Order food, groceries, or essentials through the app. Remember: <strong>the more you order, the higher your chances to win!</strong></p>
                </article>
                <article class="ld-card ld-step ld-reveal" style="--d:.24s" data-tilt>
                    <span class="num">3<i class="uil uil-trophy"></i></span>
                    <h4>Track &amp; Win</h4>
                    <p>Check your app dashboard for entry tickets and live announcement updates.</p>
                </article>
            </div>

            <div class="ld-steps-cta ld-reveal">
                <a href="{{ $playStore }}" target="_blank" rel="noopener" class="ld-btn ld-btn-primary" data-magnetic data-burst data-cursor-label="Get it">
                    <i class="uil uil-android"></i> Get it on Google Play
                </a>
                <a href="{{ $appStore }}" target="_blank" rel="noopener" class="ld-btn ld-btn-ghost" data-magnetic data-burst data-cursor-label="Get it">
                    <i class="uil uil-apple"></i> Download on the App Store
                </a>
            </div>
        </div>
    </section>

    {{-- ================= FAQ & TERMS ================= --}}
    <section class="ld-section" id="faqs">
        <div class="ld-container">
            <div class="ld-head ld-reveal">
                <span class="ld-eyebrow"><i class="uil uil-question-circle"></i> FAQs &amp; legal rules</span>
                <h2 class="ld-title">Frequently asked questions</h2>
            </div>

            <div class="ld-faq-grid">
                <div class="ld-faq">
                    @foreach($faqs as $i => $faq)
                    <details class="ld-reveal" style="--d:{{ $i * 0.08 }}s" @if($i === 0) open @endif>
                        <summary><span class="q">Q{{ $i + 1 }}</span>{{ $faq['q'] }}<span class="plus"><i class="uil uil-plus"></i></span></summary>
                        <div class="a">{{ $faq['a'] }}</div>
                    </details>
                    @endforeach
                </div>

                <aside class="ld-terms ld-reveal" style="--d:.15s">
                    <h3><i class="uil uil-file-check-alt"></i> Official Terms &amp; Conditions</h3>
                    <ul>
                        <li><i class="uil uil-user-check"></i><span><strong>Eligibility</strong>Open to all registered residents of Bahria Town Lahore aged 18 and above.</span></li>
                        <li><i class="uil uil-ticket"></i><span><strong>Entry Limits</strong>1 entry upon signup; +1 additional entry for every completed order placed via the GoFeast app during the promotional period.</span></li>
                        <li><i class="uil uil-shield-check"></i><span><strong>Verification</strong>Winners must present registered number matching their GoFeast account details to claim physical prizes (e.g., Scooter).</span></li>
                        <li><i class="uil uil-ban"></i><span><strong>Non-Transferable</strong>Cash vouchers, cashback, and physical prizes cannot be exchanged or transferred.</span></li>
                    </ul>
                </aside>
            </div>
        </div>
    </section>

    {{-- ================= FINAL CTA ================= --}}
    <section class="ld-section" style="padding-top:0">
        <div class="ld-container">
            <div class="ld-final ld-reveal">
                <h2>Your lucky entry is one tap away.</h2>
                <p>Download GoFeast, sign up and start ordering. Every order is another chance to win the brand-new scooter.</p>
                <div class="ld-hero-ctas">
                    <a href="{{ $playStore }}" target="_blank" rel="noopener" class="ld-btn ld-btn-light" data-magnetic data-burst data-cursor-label="Get it">
                        <i class="uil uil-android"></i> Get it on Google Play
                    </a>
                    <a href="{{ $appStore }}" target="_blank" rel="noopener" class="ld-btn ld-btn-outline-light" data-magnetic data-burst data-cursor-label="Get it">
                        <i class="uil uil-apple"></i> Download on the App Store
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('scripts')
<script>
    (function () {
        var root = document.getElementById('luckyDraw');
        if (!root) return;
        root.classList.add('js');

        var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        var finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;
        var colors = ['#bd3c49', '#ffc54d', '#ff9f2e', '#7d1f2b', '#e2566a'];

        /* ---- Single-button CTAs open the right store for the visitor's phone ---- */
        if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
            root.querySelectorAll('[data-app-link]').forEach(function (a) {
                a.href = @json($appStore);
            });
        }

        /* ---- Countdown ---- */
        var end = new Date(root.dataset.end).getTime();
        var timer = document.getElementById('ldTimer');
        var ended = document.getElementById('ldEnded');
        var units = {};
        timer.querySelectorAll('[data-unit]').forEach(function (el) { units[el.dataset.unit] = el; });

        function pad(n) { return n < 10 ? '0' + n : String(n); }
        function setUnit(el, value) {
            if (el.textContent === value) return;
            el.textContent = value;
            el.classList.remove('tick');
            void el.offsetWidth;
            el.classList.add('tick');
        }
        function tick() {
            var left = Math.max(0, Math.floor((end - Date.now()) / 1000));
            if (left <= 0) {
                timer.hidden = true;
                ended.hidden = false;
                return false;
            }
            setUnit(units.days, pad(Math.floor(left / 86400)));
            setUnit(units.hours, pad(Math.floor(left % 86400 / 3600)));
            setUnit(units.mins, pad(Math.floor(left % 3600 / 60)));
            setUnit(units.secs, pad(left % 60));
            return true;
        }
        if (tick()) {
            var interval = setInterval(function () { if (!tick()) clearInterval(interval); }, 1000);
        }

        /* ---- Scroll reveal ---- */
        var reveals = root.querySelectorAll('.ld-reveal');
        if ('IntersectionObserver' in window) {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-in');
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
            reveals.forEach(function (el) { io.observe(el); });
        } else {
            reveals.forEach(function (el) { el.classList.add('is-in'); });
        }

        /* ---- Confetti burst on CTA click (any device) ---- */
        if (!reduceMotion) {
            root.querySelectorAll('[data-burst]').forEach(function (btn) {
                btn.addEventListener('click', function (e) {
                    var x = e.clientX, y = e.clientY;
                    if (!x && !y) {
                        var r = btn.getBoundingClientRect();
                        x = r.left + r.width / 2;
                        y = r.top + r.height / 2;
                    }
                    for (var i = 0; i < 26; i++) {
                        var p = document.createElement('span');
                        p.className = 'ld-burst';
                        p.style.left = x + 'px';
                        p.style.top = y + 'px';
                        p.style.background = colors[i % colors.length];
                        document.body.appendChild(p);
                        var angle = Math.random() * Math.PI * 2;
                        var dist = 70 + Math.random() * 110;
                        var anim = p.animate([
                            { transform: 'translate(-50%,-50%) rotate(0deg)', opacity: 1 },
                            { transform: 'translate(' + (Math.cos(angle) * dist - 4) + 'px,' + (Math.sin(angle) * dist + 60) + 'px) rotate(' + (Math.random() * 540) + 'deg)', opacity: 0 }
                        ], { duration: 900 + Math.random() * 500, easing: 'cubic-bezier(.2,.8,.2,1)' });
                        anim.onfinish = (function (el) { return function () { el.remove(); }; })(p);
                    }
                });
            });
        }

        /* Everything below is pointer-driven: mouse/trackpad only, and only
           for visitors who haven't asked for reduced motion. */
        if (!finePointer || reduceMotion) return;

        /* ---- Custom cursor: dot + trailing ring with contextual labels ---- */
        var dot = document.createElement('div');
        var ring = document.createElement('div');
        var ringLabel = document.createElement('span');
        dot.className = 'ld-cursor-dot';
        ring.className = 'ld-cursor-ring';
        ring.appendChild(ringLabel);
        document.body.appendChild(dot);
        document.body.appendChild(ring);
        root.classList.add('has-cursor');

        var mx = -100, my = -100, rx = -100, ry = -100;
        var html = document.documentElement;

        window.addEventListener('mousemove', function (e) {
            mx = e.clientX;
            my = e.clientY;
            dot.style.transform = 'translate(' + mx + 'px,' + my + 'px)';
        }, { passive: true });

        root.addEventListener('mouseenter', function () { html.classList.add('ld-cursor-on'); });
        root.addEventListener('mouseleave', function () { html.classList.remove('ld-cursor-on', 'ld-cursor-hover', 'ld-cursor-label'); });
        root.addEventListener('mousedown', function () { html.classList.add('ld-cursor-down'); });
        window.addEventListener('mouseup', function () { html.classList.remove('ld-cursor-down'); });

        root.addEventListener('mouseover', function (e) {
            var target = e.target.closest('a, button, summary, [data-tilt]');
            html.classList.remove('ld-cursor-hover', 'ld-cursor-label');
            if (!target || !root.contains(target)) return;
            var label = target.getAttribute('data-cursor-label');
            if (label) {
                ringLabel.textContent = label;
                html.classList.add('ld-cursor-label');
            } else {
                html.classList.add('ld-cursor-hover');
            }
        });

        (function loop() {
            rx += (mx - rx) * 0.18;
            ry += (my - ry) * 0.18;
            ring.style.transform = 'translate(' + rx + 'px,' + ry + 'px)';
            requestAnimationFrame(loop);
        })();

        /* ---- Magnetic buttons ---- */
        root.querySelectorAll('[data-magnetic]').forEach(function (el) {
            el.addEventListener('mousemove', function (e) {
                var r = el.getBoundingClientRect();
                var dx = e.clientX - (r.left + r.width / 2);
                var dy = e.clientY - (r.top + r.height / 2);
                el.style.transform = 'translate(' + dx * 0.25 + 'px,' + dy * 0.35 + 'px)';
            });
            el.addEventListener('mouseleave', function () { el.style.transform = ''; });
        });

        /* ---- Tilt + spotlight cards ---- */
        root.querySelectorAll('[data-tilt]').forEach(function (card) {
            card.addEventListener('mousemove', function (e) {
                var r = card.getBoundingClientRect();
                var px = (e.clientX - r.left) / r.width;
                var py = (e.clientY - r.top) / r.height;
                card.style.setProperty('--mx', px * 100 + '%');
                card.style.setProperty('--my', py * 100 + '%');
                card.style.setProperty('--ry', (px - 0.5) * 10 + 'deg');
                card.style.setProperty('--rx', (0.5 - py) * 10 + 'deg');
            });
            card.addEventListener('mouseleave', function () {
                card.style.setProperty('--rx', '0deg');
                card.style.setProperty('--ry', '0deg');
            });
        });

        /* ---- Hero: spotlight, parallax layers and sparkle trail ---- */
        var hero = document.getElementById('ldHero');
        var layers = hero.querySelectorAll('[data-depth]');
        var lastSpark = 0;

        hero.addEventListener('mousemove', function (e) {
            var r = hero.getBoundingClientRect();
            var px = (e.clientX - r.left) / r.width;
            var py = (e.clientY - r.top) / r.height;
            hero.style.setProperty('--sx', px * 100 + '%');
            hero.style.setProperty('--sy', py * 100 + '%');

            layers.forEach(function (layer) {
                var depth = parseFloat(layer.dataset.depth);
                layer.style.transform = 'translate(' + (px - 0.5) * depth + 'px,' + (py - 0.5) * depth + 'px)';
            });

            var now = performance.now();
            if (now - lastSpark < 45) return;
            lastSpark = now;
            var s = document.createElement('span');
            s.className = 'ld-spark';
            s.style.left = (e.clientX - r.left) + 'px';
            s.style.top = (e.clientY - r.top) + 'px';
            s.style.background = colors[Math.floor(Math.random() * colors.length)];
            s.style.setProperty('--tx', (Math.random() * 60 - 30) + 'px');
            s.style.setProperty('--ty', (Math.random() * 50 + 20) + 'px');
            hero.appendChild(s);
            s.addEventListener('animationend', function () { s.remove(); });
        });

        hero.addEventListener('mouseleave', function () {
            layers.forEach(function (layer) { layer.style.transform = ''; });
        });
    })();
</script>
@endsection
