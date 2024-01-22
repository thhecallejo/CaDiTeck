// Selecciona el elemento HTML con la clase "demo"
const $demo = document.querySelector('.demo');

// Inicializa una bandera para controlar si el procesamiento está en curso
let processing = false;

// Agrega un event listener para el clic en el elemento "demo"
$demo.addEventListener('click', () => {
    // Si ya está en proceso, no hagas nada
    if (processing) return;

    // Inicializa una bandera para controlar si se está revirtiendo el proceso
    let reverting = false;

    // Establece la bandera de procesamiento a true
    processing = true;

    // Crea un nuevo elemento div que servirá como escucha para el evento transitionend
    const $endListener = document.createElement('div');
    $endListener.classList.add('demo-transitionend-listener');
    $demo.appendChild($endListener);

    // Activa el reflujo del diseño (layout) para forzar la aplicación de las clases CSS
    const layoutTrigger = $demo.offsetTop;

    // Agrega clases CSS para indicar que el elemento está en proceso
    $demo.classList.add('s--processing');

    // Agrega un event listener para el evento transitionend
    $endListener.addEventListener('transitionend', () => {
        // Si ya se está revirtiendo, no hagas nada
        if (reverting) return;

        // Establece la bandera de reversión a true
        reverting = true;

        // Agrega la clase CSS para indicar que el elemento está revirtiendo
        $demo.classList.add('s--reverting');
    });

    // Establece un temporizador para revertir el proceso después de 10000 milisegundos (10 segundos)
    setTimeout(() => {
        // Elimina el elemento escucha
        $demo.removeChild($endListener);

        // Elimina las clases CSS relacionadas con el procesamiento y la reversión
        $demo.classList.remove('s--processing', 's--reverting');

        // Establece la bandera de procesamiento de nuevo a false
        processing = false;
    }, 10000); // 10 segundos
});
