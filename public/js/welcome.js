/* =====================
   Hansa Fab - Streamer Welcome Page Interactivity
   ===================== */

document.addEventListener('DOMContentLoaded', function () {
    // === Reveal on scroll ===
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    // === Count-up numbers ===
    function countUp(el) {
        const target = parseInt(el.getAttribute('data-count'), 10);
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 2000;
        const start = performance.now();

        function update(now) {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const value = Math.floor(eased * target);
            el.textContent = value.toLocaleString() + suffix;
            if (progress < 1) requestAnimationFrame(update);
        }
        requestAnimationFrame(update);
    }

    const countObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                countUp(entry.target);
                countObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('[data-count]').forEach(el => countObserver.observe(el));

    // === Marquee cursor trail ===
    const trail = document.querySelector('.glow-trail');
    if (trail) {
        document.addEventListener('mousemove', (e) => {
            trail.style.left = e.clientX + 'px';
            trail.style.top = e.clientY + 'px';
            trail.style.opacity = '1';
        });
    }

    // === Confetti effect on subscribe click ===
    function createConfetti() {
        const colors = ['#a78bfa', '#818cf8', '#f472b6', '#22d3ee', '#fbbf24', '#34d399', '#f87171'];
        const count = 40;

        for (let i = 0; i < count; i++) {
            const piece = document.createElement('div');
            piece.className = 'confetti-piece';
            piece.style.left = Math.random() * 100 + 'vw';
            piece.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
            piece.style.transform = 'rotate(' + Math.random() * 360 + 'deg)';
            piece.style.borderRadius = Math.random() > 0.5 ? '50%' : '2px';
            document.body.appendChild(piece);

            const fall = piece.animate([
                { transform: 'translateY(0) rotate(0deg)', opacity: 1 },
                { transform: 'translateY(100vh) rotate(720deg)', opacity: 0 }
            ], {
                duration: 2500 + Math.random() * 2000,
                easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
            });

            fall.onfinish = () => piece.remove();
        }
    }

    const subscribeBtn = document.getElementById('subscribe-btn');
    if (subscribeBtn) {
        subscribeBtn.addEventListener('click', (e) => {
            e.preventDefault();
            createConfetti();
            showToast('Terima kasih! Subscribed! 🎉');
        });
    }

    // === Toast notifications ===
    function showToast(message) {
        const existing = document.getElementById('toast');
        if (existing) existing.remove();

        const toast = document.createElement('div');
        toast.id = 'toast';
        toast.style.cssText = 'position:fixed;bottom:30px;left:50%;transform:translateX(-50%);' +
            'background:linear-gradient(135deg,#7c3aed,#6366f1);color:white;padding:14px 24px;' +
            'border-radius:12px;font-weight:600;z-index:1000;box-shadow:0 10px 40px rgba(124,58,237,0.5);' +
            'animation:pop-in 0.4s cubic-bezier(0.175,0.885,0.32,1.275);font-size:15px;';
        toast.textContent = message;
        document.body.appendChild(toast);

        setTimeout(() => toast.remove(), 3000);
    }

    // Make showToast global for other elements
    window.showToast = showToast;

    // === Copy discord link ===
    const discordBtn = document.getElementById('discord-btn');
    if (discordBtn) {
        discordBtn.addEventListener('click', (e) => {
            e.preventDefault();
            navigator.clipboard.writeText('https://discord.gg/hansafab').then(() => {
                showToast('Discord link copied! 📋');
            });
        });
    }

    // === Live chat simulation ===
    const sendMsgBtn = document.getElementById('send-msg');
    const msgInput = document.getElementById('msg-input');
    const chatBox = document.getElementById('chat-box');

    if (sendMsgBtn && msgInput && chatBox) {
        const botResponses = [
            'hansaPog 🔥',
            'Welcome to the stream! 🙌',
            'LETS GOOO!',
            'Never back down! 💪',
            'hansaLove',
            'GG WP! 🎮',
            'Clip that!!',
            'This is the way 🔥',
            'so proud of this community ❤️',
            'hansaHype'
        ];

        sendMsgBtn.addEventListener('click', () => {
            const msg = msgInput.value.trim();
            if (!msg) return;

            addChatMessage('You', msg, true);
            msgInput.value = '';

            // Simulated bot reply
            setTimeout(() => {
                const botMsg = botResponses[Math.floor(Math.random() * botResponses.length)];
                addChatMessage('ChatBot', botMsg, false);
            }, 1200);
        });

        msgInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendMsgBtn.click();
        });

        function addChatMessage(user, msg, isSelf) {
            const div = document.createElement('div');
            div.className = 'chat-message flex items-start gap-2 mb-3 animate-pop-in';
            if (isSelf) div.style.justifyContent = 'flex-end';

            const color = isSelf ? '#a78bfa' : '#818cf8';
            div.innerHTML = `
                <div class="${isSelf ? 'order-2' : ''} text-left max-w-[75%]">
                    <div class="text-xs mb-1" style="color:${color}">${user}</div>
                    <div class="px-3 py-2 rounded-xl bg-white/5 border border-white/10 text-sm">${escapeHtml(msg)}</div>
                </div>
            `;
            chatBox.appendChild(div);
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        function escapeHtml(str) {
            const div = document.createElement('div');
            div.textContent = str;
            return div.innerHTML;
        }
    }

    // === Auto-typing effect on hero text ===
    const heroTyped = document.getElementById('hero-typed');
    if (heroTyped) {
        const words = ['Gaming Streamer', 'Variety Creator', 'Community Builder', 'Indonesian Streamer'];
        let wordIndex = 0;
        let charIndex = 0;
        let deleting = false;

        function type() {
            const word = words[wordIndex];
            if (deleting) {
                charIndex--;
                heroTyped.textContent = word.substring(0, charIndex);
                if (charIndex === 0) {
                    deleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                    setTimeout(type, 500);
                    return;
                }
                setTimeout(type, 50);
            } else {
                charIndex++;
                heroTyped.textContent = word.substring(0, charIndex);
                if (charIndex === word.length) {
                    deleting = true;
                    setTimeout(type, 2000);
                    return;
                }
                setTimeout(type, 100);
            }
        }
        type();
    }
});
