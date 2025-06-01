document.addEventListener('DOMContentLoaded', function() {
    // Función para generar captcha
    function generateCaptchaText() {
        const chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        let captcha = '';
        for (let i = 0; i < 5; i++) {
            captcha += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        return captcha;
    }

    // Función para dibujar captcha
    function drawCaptcha(canvas, text) {
        const ctx = canvas.getContext('2d');
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = '#f0f0f0';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.font = '24px Arial';
        ctx.fillStyle = '#333';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(text, canvas.width/2, canvas.height/2);
    }

    // Inicializar captchas para todos los formularios
    document.querySelectorAll('.captchaCanvas').forEach(canvas => {
        const captchaText = generateCaptchaText();
        canvas.dataset.captcha = captchaText;
        drawCaptcha(canvas, captchaText);
    });

    // Función para regenerar captcha
    window.generateCaptcha = function(formId) {
        const form = document.getElementById(formId);
        const canvas = form.querySelector('.captchaCanvas');
        const captchaText = generateCaptchaText();
        canvas.dataset.captcha = captchaText;
        drawCaptcha(canvas, captchaText);
    };

    // Función para mostrar/ocultar contraseña
    window.togglePasswordVisibility = function(inputId, button) {
        const input = document.getElementById(inputId);
        const icon = button.querySelector('i');
        
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        } else {
            input.type = 'password';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        }
    };

    // Validación para formulario de alumno
    const validateAlumno = new window.JustValidate('#formulario_alumno', {
        validateBeforeSubmitting: true,
        lockForm: true,
        focusInvalidField: true,
        successFieldStyle: {
            border: '1px solid #4CAF50'
        }
    });

    validateAlumno
        .addField('#alumno_numero_control', [
            {
                rule: 'required',
                errorMessage: 'El número de control es requerido'
            },
            {
                rule: 'minLength',
                value: 8,
                errorMessage: 'Mínimo 8 caracteres'
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
                validator: (value) => {
                    const canvas = document.querySelector('#formulario_alumno .captchaCanvas');
                    return value === canvas.dataset.captcha;
                },
                errorMessage: 'Captcha incorrecto'
            }
        ]);

    // Validación para formulario de aspirante (inicio sesión)
    const validateAspiranteLogin = new window.JustValidate('#formulario_iniciar_session_aspirante', {
        validateBeforeSubmitting: true,
        lockForm: true,
        focusInvalidField: true,
        successFieldStyle: {
            border: '1px solid #4CAF50'
        }
    });

    validateAspiranteLogin
        .addField('#iniciar_session_aspirante_curp', [
            {
                rule: 'required',
                errorMessage: 'La CURP es requerida'
            },
            {
                rule: 'minLength',
                value: 18,
                errorMessage: 'La CURP debe tener 18 caracteres'
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
            }
        ])
        .addField('#iniciar_session_aspirante_captcha', [
            {
                validator: (value) => {
                    const canvas = document.querySelector('#formulario_iniciar_session_aspirante .captchaCanvas');
                    return value === canvas.dataset.captcha;
                },
                errorMessage: 'Captcha incorrecto'
            }
        ]);

    // Validación para formulario de registro de aspirante
    const validateAspiranteRegistro = new window.JustValidate('#formulario_primera_vez_aspirantes_registro', {
        validateBeforeSubmitting: true,
        lockForm: true,
        focusInvalidField: true,
        successFieldStyle: {
            border: '1px solid #4CAF50'
        }
    });

    validateAspiranteRegistro
        .addField('#primera_vez_apellido_paterno', [
            {
                rule: 'required',
                errorMessage: 'El apellido paterno es requerido'
            }
        ])
        .addField('#primera_vez_nombre', [
            {
                rule: 'required',
                errorMessage: 'El nombre es requerido'
            }
        ])
        .addField('#primera_vez_fecha_nacimiento', [
            {
                rule: 'required',
                errorMessage: 'La fecha de nacimiento es requerida'
            }
        ])
        .addField('#primera_vez_sexo', [
            {
                rule: 'required',
                errorMessage: 'El sexo es requerido'
            }
        ])
        .addField('#primera_vez_curp', [
            {
                rule: 'required',
                errorMessage: 'La CURP es requerida'
            },
            {
                rule: 'minLength',
                value: 18,
                errorMessage: 'La CURP debe tener 18 caracteres'
            }
        ])
        .addField('#primera_vez_celular', [
            {
                rule: 'required',
                errorMessage: 'El celular es requerido'
            },
            {
                rule: 'minLength',
                value: 10,
                errorMessage: 'El celular debe tener 10 dígitos'
            }
        ])
        .addField('#primera_vez_email', [
            {
                rule: 'required',
                errorMessage: 'El email es requerido'
            },
            {
                rule: 'email',
                errorMessage: 'Email inválido'
            }
        ])
        .addField('#primera_vez_aspirante_registro_captcha', [
            {
                validator: (value) => {
                    const canvas = document.querySelector('#formulario_primera_vez_aspirantes_registro .captchaCanvas');
                    return value === canvas.dataset.captcha;
                },
                errorMessage: 'Captcha incorrecto'
            }
        ]);

    // Validación para formulario de personal
    const validatePersonal = new window.JustValidate('#formulario_personal', {
        validateBeforeSubmitting: true,
        lockForm: true,
        focusInvalidField: true,
        successFieldStyle: {
            border: '1px solid #4CAF50'
        }
    });

    validatePersonal
        .addField('#personal_usuario', [
            {
                rule: 'required',
                errorMessage: 'El usuario es requerido'
            },
            {
                rule: 'minLength',
                value: 3,
                errorMessage: 'Mínimo 3 caracteres'
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
                errorMessage: 'Mínimo 6 caracteres'
            }
        ])
        .addField('#personal_captcha', [
            {
                validator: (value) => {
                    const canvas = document.querySelector('#formulario_personal .captchaCanvas');
                    return value === canvas.dataset.captcha;
                },
                errorMessage: 'Captcha incorrecto'
            }
        ]);
});