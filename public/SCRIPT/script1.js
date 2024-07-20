document.querySelectorAll('.tab-button').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
        document.getElementById(button.getAttribute('data-tab')).classList.add('active');
    });
});
