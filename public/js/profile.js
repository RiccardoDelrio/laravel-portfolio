// Profile Page JavaScript
document.addEventListener('DOMContentLoaded', function () {
    // Show status messages for profile updates
    const profileStatus = document.getElementById('profile-status');
    const passwordStatus = document.getElementById('status');

    if (profileStatus) {
        profileStatus.style.display = 'block';
        setTimeout(() => {
            profileStatus.style.opacity = '0';
            setTimeout(() => {
                profileStatus.style.display = 'none';
            }, 300);
        }, 2000);
    }

    if (passwordStatus) {
        passwordStatus.style.display = 'block';
        setTimeout(() => {
            passwordStatus.style.opacity = '0';
            setTimeout(() => {
                passwordStatus.style.display = 'none';
            }, 300);
        }, 2000);
    }

    // Form validation enhancement
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Salvando...';

                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = submitBtn.getAttribute('data-original-text') || 'Salva';
                }, 1000);
            }
        });
    });

    // Store original button text
    const submitButtons = document.querySelectorAll('button[type="submit"]');
    submitButtons.forEach(btn => {
        btn.setAttribute('data-original-text', btn.textContent);
    });
});
