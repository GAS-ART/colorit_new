@extends('layout')
@section('title', __('titles.privacy.title'))
@section('description', __('titles.privacy.description'))
@section('ogTitle', __('titles.privacy.ogTitle'))
@section('ogDescription', __('tittles.privacy.ogDescription'))

@php
    $breadCrumbs = [
        'links' => [
            [
                'route' => route('home', __('lang.current')),
                'label' => __('crumbs.home'),
            ],
        ],
        'currentPage' => __('crumbs.privacy'),
    ];
@endphp

@section('content')
    <x-bread-crumbs :$breadCrumbs />
    <section class="privacy">
        <div class="policy__container">
            <h1 class="tittle-policy tittle">POLÍTICA DE PRIVACIDAD</h1>
            <h3 class="policy-tittle-item">1. POLÍTICA DE ENLACES Y EXENCIONES DE RESPONSABILIDAD</h3>
            <div class="policy">
                <p>…………………… no se hace responsable del contenido de las páginas web a las que pueda acceder el usuario a
                    través
                    de
                    los enlaces establecidos en sus sitios web y declara que en ningún caso examinará ni ejercitará ningún
                    tipo
                    de
                    control sobre el contenido de otras páginas de la red.</p>
                <p>Asimismo, tampoco garantiza la disponibilidad técnica, exactitud, veracidad, validez o legalidad de
                    páginas
                    ajenas a su propiedad a las que se pueda acceder a través de los enlaces.</p>
                <p>…………………… declara que ha adoptado todas las medidas necesarias para evitar cualquier daño que pueda
                    derivarse
                    de
                    la navegación por sus páginas web. En consecuencia, …………………… no se hace responsable, en ningún caso, de
                    los
                    eventuales daños que pueda sufrir el usuario a causa de la navegación por Internet.</p>
                <p>…………………… no se responsabiliza de los daños o perjuicios de cualquier tipo producidos en el Usuario que
                    traigan
                    causa de fallos o desconexiones en las redes de telecomunicaciones que produzcan la suspensión,
                    cancelación,
                    instalación o interrupción del servicio de la web durante la prestación del mismo o con carácter previo.
                </p>
                <p>El acceso a la web: …………………… no implica la obligación por parte de la empresa de controlar la ausencia de
                    virus
                    o cualquier otro elemento informático dañino. Corresponde al Usuario, en todo caso, la disponibilidad de
                    herramientas adecuadas para la detección y desinfección de programas informáticos dañinos.</p>
                <p>…………………… no se responsabiliza de los daños producidos en los equipos informáticos, documentos y/o
                    ficheros de
                    los Usuarios o de terceros durante la prestación del servicio en el Portal.</p>
            </div>
            <h3 class="policy-tittle-item">2. PUBLICIDAD</h3>
            <div class="policy">
                <p>La web: …………………… podrá alojar contenidos publicitarios o patrocinados. Los anunciantes o patrocinadores
                    son
                    los
                    únicos responsables de asegurarse que el material remitido para su inclusión en la web cumple con las
                    leyes
                    que
                    en cada caso puedan ser de aplicación.</p>
                <p>…………………… no será responsable de cualquier error, inexactitud o irregularidad que puedan contener los
                    contenidos
                    publicitarios o de los patrocinadores.</p>
            </div>
            <h3 class="policy-tittle-item">3. MODIFICACIONES</h3>
            <div class="policy">
                …………………… se reserva el derecho a realizar las modificaciones que considere oportunas, sin aviso previo, en
                el
                contenido de sus sitios web, tanto en cuanto a los contenidos de los sitios web como por sus condiciones de
                uso
                o
                por las condiciones generales de contratación. Dichas modificaciones podrán realizarse, a través de sus
                sitios
                web, de cualquier forma admisible en derecho y serán de obligado cumplimiento durante el tiempo que estén
                publicadas en la web y hasta que no sean modificadas por otras posteriores.
            </div>
            <h3 class="policy-tittle-item">4. RESERVA DE COOKIES</h3>
            <div class="policy">
                <p>…………………… se reserva el derecho de utilizar cookies en la navegación del usuario por sus sitios web para
                    facilitar la personalización y comodidad de la navegación. Siguiendo la política de protección de datos
                    de
                    la
                    empresa, …………………… informa que las cookies se asocian al usuario anónimo ya su ordenador y no
                    proporcionan
                    por
                    sí mismas ni el nombre ni los apellidos del usuario.</p>
                <p>El usuario tiene la posibilidad de configurar su navegador de manera que sea informado de la recepción de
                    cookies, pudiendo, si así lo desea, impedir que se instalen en su disco duro. Sin embargo, para acceder
                    a
                    los
                    sitios web de …………………… no es preceptiva la instalación de cookies.</p>
                <p>El usuario se compromete a abstenerse de reproducir, copiar, distribuir, poner a disposición o de
                    cualquier
                    otra forma comunicar públicamente, transformar o modificar los Contenidos, a menos que se cuente con la
                    autorización del titular de los correspondientes derechos o ello resulte legalmente permitido.</p>
            </div>
            <h3 class="policy-tittle-item">5. PROTECCIÓN DE DATOS PERSONAL</h3>
            <div class="policy">
                <p>De conformidad con lo establecido por la Ley Orgánica y el Reglamento General-UE-2016/679 del Parlamento
                    y
                    Consejo de Europa de Protección de Datos de Carácter Personal, aprobado el 27 de abril de 2016……………………
                    informa
                    a los usuarios de sus websites de que estamos obligados a guardar secreto profesional sobre los datos
                    personales recabados por la empresa mediante los formularios sitos en sus páginas, esta obligación
                    continuara
                    incluso después de haber finalizado nuestra relación comercial o contractual, y en ningún caso podremos
                    hacer
                    públicos los datos personales de los visitantes y clientes a la web sin su consentimiento. Los menores
                    de 13
                    años no pueden prestar su consentimiento para que un comercio recoja y trate sus datos personales; solo
                    sus
                    representantes legales (padres o tutores) son quienes pueden hacerlo en su nombre. Aquellos comercios
                    que
                    necesiten tratar datos de menores de 13 años, deben disponer de los medios para obtener el
                    consentimiento de
                    sus padres o tutores, por ejemplo, mediante un mensaje de correo electrónico dirigido a alguno de ellos
                    que
                    contenga un enlace a un formulario electrónico. No se puede pedir a los menores de 13 años datos sobre
                    el
                    ámbito familiar, siendo la única excepción los datos de identificación y contacto de los padres o
                    tutores.
                </p>
                <p>Estos datos, serán introducidos en un fichero automatizado bajo la responsabilidad del administrador de
                    la
                    web
                    de, …………………… con la finalidad de poder facilitar, agilizar y cumplir los compromisos establecidos entre
                    ambas
                    partes. Asimismo, …………………… informa de la posibilidad de ejercer los derechos de acceso, que permite al
                    usuario
                    web, conocer que datos personales tiene el administrador de esta página y en tal caso contestara en un
                    plazo
                    de
                    30 días, siempre que conserve los datos, rectificación, que permite corregir errores, modificar los
                    datos
                    que
                    sean inexactos o incompletos y garantizar la certeza de la información, oposición que podrá solicitar y
                    conseguir que no lleve a cabo el tratamiento de datos, supresión que permite que se supriman los datos
                    inadecuados o excesivos, limitación, por el que puede solicitar que se limite el tratamiento de sus
                    datos
                    cuando haya ejercido su derecho a la rectificación de sus datos personales, y portabilidad, para que el
                    usuario
                    pueda obtener una copia de los datos personales que haya facilitado en la web a fin de poder
                    transmitirlos a
                    otros servicios, estos derechos se podrán ejercer por cualquier medio que deje constancia de su envío y
                    de
                    su
                    recepción a la dirección: ……………………. Código Postal: ……………………. Localidad: ……………………. Provincia: …………………….
                    Correo
                    electrónico: ……………………, ​​aportando fotocopia del DNI o documentación alternativa que acredite su
                    identidad.
                </p>
                <p>Mientras no nos comunique lo contrario, entenderemos que sus datos no han sido modificados, que usted se
                    compromete a notificarnos cualquier variación y que tenemos el consentimiento para utilizarlos a fin de
                    poder
                    fidelizar la relación entre las partes.</p>
                <p>El envío de sus datos mediante el/los formularios de nuestra web estará supeditado obligatoriamente a que
                    haya
                    leído/aceptado la Política de Privacidad, mediante un check box obligatorio al pie del formulario.</p>
                <p>De acuerdo con lo establecido en la Ley 34/2002, de Servicios de la Sociedad de la Información y el
                    Comercio
                    Electrónico en su artículo 21, pedimos su consentimiento para poder realizar comunicaciones
                    publicitarias
                    que
                    consideremos puedan ser de su interés, por correo electrónico o por cualquier otro medio de comunicación
                    electrónica equivalente, este consentimiento lo aceptará o negará con un check box obligatorio al pie
                    del
                    formulario.</p>
            </div>
            <h3 class="policy-tittle-item">6. PROPIEDAD INTELECTUAL</h3>
            <div class="policy">
                <p>Los derechos de propiedad intelectual e industrial derivados de todos los textos, imágenes, así como de
                    los
                    medios y formas de presentación y montaje de sus páginas pertenecen, por sí mismos o como cesionaria, a
                    ……………………. Serán, por tanto, obras protegidas con propiedad intelectual por el ordenamiento jurídico
                    español
                    y
                    se les podrá aplicar tanto la normativa española y comunitaria en este campo, como los tratados
                    internacionales
                    relativos a la materia y suscritos por España.</p>
                <p>Todos los derechos reservados. En cumplimiento de la Ley de la Propiedad Intelectual se prohíbe
                    expresamente
                    la
                    reproducción, distribución, comunicación pública y utilización de la totalidad o parte de los contenidos
                    de
                    sus
                    páginas web sin el consentimiento explícito de …………………….</p>
                <p>Así mismo, …………………… se reserva la facultad de presentar las acciones civiles o penales que considere
                    oportunas
                    por la utilización indebida de sus páginas web y contenidos o por el incumplimiento de estas
                    condiciones.
                </p>
            </div>
            <h3 class="policy-tittle-item">7. SELLOS DE CONFIANZA</h3>
            <div class="policy">
                <p>Los sellos de confianza son distintivos que se proporcionan a las tiendas online para demostrar su
                    calidad y
                    seguridad en la venta online.</p>
                <p>Para conseguir el sello, éstas son auditadas o evaluadas para comprobar que cumplen los criterios de
                    seguridad
                    en la compra y cumplimiento legal en materia de privacidad y protección de datos de los consumidores.
                </p>
                <p>Las tiendas que disponen de un sello de confianza están adheridas a un código de conducta y suelen
                    ofrecer a
                    los consumidores procedimientos alternativos de resolución de conflictos sencillos, rápidos y cómodos.
                </p>
            </div>
            <h3 class="policy-tittle-item">8. CERTIFICADOS DE CUMPLIMIENTO LSSI-CE Y PROTECCIÓN DE DATOS</h3>
            <div class="policy">
                …………………… cumple con la normativa de Protección de Datos vigente y con la LSSI-CE, y ha sido asesorada en
                estas
                normativas por, por lo que se le otorgan sendos certificados en formato de imagen digital para que pueda
                exponerlos en su sitio web.
            </div>
            <h3 class="policy-tittle-item">9. ACCIONES LEGAL, LEGISLACIÓN APLICABLE Y JURISDICCIÓN</h3>
            <div class="policy">
                La relación entre el usuario y …………………… se regirá por la normativa española vigente y serán competentes para
                decidir sobre cualquier controversia que pueda surgir entre el usuario y ……………………, los juzgados o tribunales
                de
                la
                localidad de …………………….
            </div>
        </div>
    </section>
@endsection
