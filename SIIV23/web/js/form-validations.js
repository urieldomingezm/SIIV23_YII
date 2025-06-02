document.addEventListener('DOMContentLoaded', function() {
    // Configuración común para validadores
    const validatorConfig = {
        validateBeforeSubmitting: true,
        lockForm: true,
        focusInvalidField: true,
        errorFieldCssClass: 'is-invalid',
        successFieldCssClass: 'is-valid',
        errorLabelCssClass: 'just-validate-error-label',
        errorLabelStyle: {
            color: '#dc3545'
        },
        errorsContainer: function(field) {
            // Buscar el contenedor de error más cercano
            return field.closest('.col-md-6, .col-12').querySelector('.error-container');
        },
        testingMode: true
    };

    // Configuración de captcha
    const captchaConfig = {
        font: '24px Arial',
        textColor: '#0d6efd',
        backgroundColor: '#f8f9fa',
        chars: '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',
        length: 5
    };

    // Función para generar texto del captcha
    function generateCaptchaText() {
        let text = '';
        for (let i = 0; i < captchaConfig.length; i++) {
            text += captchaConfig.chars.charAt(Math.floor(Math.random() * captchaConfig.chars.length));
        }
        return text;
    }

    // Función para dibujar el captcha
    function drawCaptcha(canvas, text) {
        const ctx = canvas.getContext('2d');
        
        ctx.fillStyle = captchaConfig.backgroundColor;
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // Dibujar líneas de ruido
        for (let i = 0; i < 5; i++) {
            ctx.beginPath();
            ctx.moveTo(Math.random() * canvas.width, Math.random() * canvas.height);
            ctx.lineTo(Math.random() * canvas.width, Math.random() * canvas.height);
            ctx.strokeStyle = '#dee2e6';
            ctx.stroke();
        }

        ctx.font = captchaConfig.font;
        ctx.fillStyle = captchaConfig.textColor;
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';

        // Dibujar caracteres con rotación
        const chars = text.split('');
        const charWidth = canvas.width / (chars.length + 2);
        chars.forEach((char, i) => {
            const x = charWidth * (i + 1.5);
            const y = canvas.height / 2;
            ctx.save();
            ctx.translate(x, y);
            ctx.rotate((Math.random() - 0.5) * 0.4);
            ctx.fillText(char, 0, 0);
            ctx.restore();
        });

        canvas.dataset.captchaText = text;
    }

    // Inicializar captchas
    document.querySelectorAll('.captcha-canvas').forEach(canvas => {
        drawCaptcha(canvas, generateCaptchaText());
    });

    // Validador para alumnos
    const validadorAlumno = new JustValidate('#formulario_alumno', validatorConfig);

    validadorAlumno
        .addField('#alumno_numero_control', [
            {
                rule: 'required',
                errorMessage: 'El número de control es requerido'
            },
            {
                rule: 'minLength',
                value: 8,
                errorMessage: 'El número de control debe tener 8 caracteres'
            }
        ])
        .addField('#alumno_password', [
            {
                rule: 'required',
                errorMessage: 'El NIP es requerido'
            },
            {
                rule: 'minLength',
                value: 4,
                errorMessage: 'El NIP debe tener 4 dígitos'
            }
        ])
        .addField('#alumno_captcha', [
            {
                rule: 'required',
                errorMessage: 'El código de verificación es requerido'
            },
            {
                validator: (value) => {
                    const canvas = document.querySelector('#formulario_alumno .captcha-canvas');
                    return value === canvas.dataset.captchaText;
                },
                errorMessage: 'El código de verificación no coincide'
            }
        ]);

    // Validador para personal
    const validadorPersonal = new JustValidate('#formulario_personal', validatorConfig);

    validadorPersonal
        .addField('#personal_usuario', [
            {
                rule: 'required',
                errorMessage: 'El usuario es requerido'
            },
            {
                rule: 'minLength',
                value: 3,
                errorMessage: 'El usuario debe tener al menos 3 caracteres'
            }
        ])
        .addField('#personal_password', [
            {
                rule: 'required',
                errorMessage: 'La contraseña es requerida'
            },
            {
                rule: 'minLength',
                value: 6,
                errorMessage: 'La contraseña debe tener al menos 6 caracteres'
            }
        ])
        .addField('#personal_captcha', [
            {
                rule: 'required',
                errorMessage: 'El código de verificación es requerido'
            },
            {
                validator: (value) => {
                    const canvas = document.querySelector('#formulario_personal .captcha-canvas');
                    return value === canvas.dataset.captchaText;
                },
                errorMessage: 'El código de verificación no coincide'
            }
        ]);

    // Validador para inicio de sesión de aspirantes
    const validadorAspiranteLogin = new JustValidate('#formulario_iniciar_session_aspirante', validatorConfig);

    validadorAspiranteLogin
        .addField('#iniciar_session_aspirante_curp', [
            {
                rule: 'required',
                errorMessage: 'La CURP es requerida'
            },
            {
                rule: 'minLength',
                value: 18,
                errorMessage: 'La CURP debe tener 18 caracteres'
            },
            {
                rule: 'maxLength',
                value: 18,
                errorMessage: 'La CURP debe tener 18 caracteres'
            },
            {
                rule: 'customRegexp',
                value: /^[A-Z]{4}[0-9]{6}[HM][A-Z]{5}[0-9A-Z][0-9]$/,
                errorMessage: 'La CURP no tiene el formato correcto'
            }
        ])
        .addField('#iniciar_session_aspirante_password', [
            {
                rule: 'required',
                errorMessage: 'El NIP es requerido'
            },
            {
                rule: 'minLength',
                value: 4,
                errorMessage: 'El NIP debe tener 4 dígitos'
            },
            {
                rule: 'maxLength',
                value: 4,
                errorMessage: 'El NIP debe tener 4 dígitos'
            },
            {
                rule: 'number',
                errorMessage: 'El NIP debe contener solo números'
            }
        ])
        .addField('#iniciar_session_aspirante_captcha', [
            {
                rule: 'required',
                errorMessage: 'El código de verificación es requerido'
            },
            {
                validator: (value) => {
                    const canvas = document.querySelector('#formulario_iniciar_session_aspirante .captchaCanvas');
                    return value === canvas.dataset.captchaText;
                },
                errorMessage: 'El código de verificación no coincide'
            }
        ])
        .onSuccess((event) => {
            // Aquí puedes manejar el envío del formulario
            event.target.submit();
        });

    // Función para refrescar captcha
    window.refreshCaptcha = function(button) {
        const canvas = button.previousElementSibling;
        drawCaptcha(canvas, generateCaptchaText());
    };

    // Función para mostrar/ocultar contraseña
    window.togglePassword = function(inputId, button) {
        const passwordInput = document.getElementById(inputId);
        const icon = button.querySelector('i');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        }
    };

    // Inicializar los botones de mostrar/ocultar contraseña
    document.querySelectorAll('button[onclick*="togglePassword"]').forEach(button => {
        const inputId = button.getAttribute('onclick').match(/'([^']+)'/)[1];
        button.addEventListener('click', function() {
            togglePassword(inputId, this);
        });
    });
});