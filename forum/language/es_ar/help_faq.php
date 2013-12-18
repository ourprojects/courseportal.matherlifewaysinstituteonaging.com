<?php
/** 
*
* help_faq.php [Argentinian Spanish]
*
* @package language
* @version $Id: $
* @package language
* @copyright (c) 2007 phpBB Group. Modified by nextgen for phpbbargentina.com in 2012 
* @author 2007-11-26 - Traducido por Huan Manwe junto con phpbb-es.com (http://www.phpbb-es.com) basado en la version argentina hecha por larveando.com.ar ).
* @author - ImagePack made nextgen (Styles Team Leader of http://www.phpbbargentina.com)
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//

$help = array(
	array(
		0	=> '--',
		1	=> 'Problemas acerca de la autenticación y registro',
	),
	array(
		0	=> '¿Por qué no puedo autenticarme?',
		1	=> 'Existen varias razones por lo cuál esto puede suceder. Primero, asegúrate de que tu nombre de usuario y contraseña se encuentren escritos correctamente. Si lo están, comunícate con La Administración para asegurarte de que no has sido excluido. También es posible que el foro esté mal configurado por su dueño y/o tenga fallos en la programación, por lo que necesitaría ser reparado.',
	),
	array(
		0	=> '¿Por qué me tengo que registrar?',
		1	=> 'No estás obligado a hacerlo, la decisión la toman los administradores y moderadores. En algunos casos necesitarás registrarte para publicar temas y respuestas. Sin embargo, estar registrado te dará acceso a contenidos adicionales y/o ventajas que como usuario invitado no disfrutarías, como tener tu imagen personalizada (avatar), mensajes privados, suscripción a grupos de usuarios, etc. Tan solo te tomará unos segundos. Es muy recomendable.',
	),
	array(
		0	=> '¿Por qué mi sesión de usuario expira automáticamente?',
		1	=> 'Si no activas la casilla <em>Entrar automáticamente</em> cuando ingresas al foro, tus datos se guardan en una cookie segura, que se elimina al salir de la página o en cierto tiempo. Esto previene que tu cuenta pueda ser usada por otra persona. Para que el sistema le reconozca automáticamente solo marca la casilla al ingresar. No es recomendable si accedes al foro desde una PC compartido, e.j. biblioteca, cyber-cafés, PC\'s de universidades, etc. Si no ves la casilla, significa que la administración del foro ha deshabilitado la opción.',
	),
	array(
		0	=> '¿Cómo evito que mi nombre de usuario aparezca en las listas de usuarios identificados?',
		1	=> 'Dentro del Panel de Control de Usuario, en "Preferencias de Foros", encontrarás la opción <em>Ocultar mi estado de conexión</em>. Habilita la opción con <em>SI</em> y solamente serás visto por administradores, moderadores y usted mismo. Serás contado como un usuario oculto.',
	),
	array(
		0	=> '¡Perdí mi contraseña!',
		1	=> 'No te asustes, ¡calma! Si tu contraseña no puede ser recuperada podes desactivarla o cambiarla. Visita la página de ingreso (login) y hace clic en <em>Olvidé mi contraseña</em>. Seguí las instrucciones y estarás identificado nuevamente en muy poco tiempo.',
	),
	array(
		0	=> 'Me registré ¡y no me puedo identificar!',
		1	=> 'Primero, verifica tu nombre de usuario y contraseña. Si todo está correcto, hay dos posibles razones. Si el Sistema de Protección Infantil (COPPA) está activado y cuando te registraste elegiste la opción <em>Soy menor de 13 años</em> entonces tendrás que seguir algunas instrucciones que se te darán para activar la cuenta. Algunos foros disponen que las cuentas deben ser activadas, ya sea por vos mismo o por La Administración, antes de que puedas identificarte; esta información se te brindará al finalizar el proceso de registro. Si se te envió un e-mail, seguí las instrucciones. Si no recibiste ningún e-mail, seguramente la dirección de correo electrónico que proporcionaste no es correcta o tal vez haya sido capturada por un filtro de spam. Si estás seguro de que la dirección de e-mail que proporcionaste es correcta, envía un mensaje a La Administración.',
	),
	array(
		0	=> 'Hace un tiempo me registré, ¡pero ahora no puedo conectarme!',
		1   => 'Es posible que la administración haya desactivado o borrado tu cuenta por alguna razón. También, algunos foros periódicamente remueven sus usuarios que no publicaron mensajes por cierto periodo de tiempo para reducir el peso de la base de datos. Si es así, regístrate de nuevo y participa de las discusiones.',
	),
	array(
		0	=> '¿Qué es COPPA?',
		1	=> 'COPPA, o Acta de Privacidad y Protección de Niños menores de 13 años del año 1998, es una ley de los Estados Unidos (por eso se mantiene en inglés) donde se solicita a los sitios de Internet, los cuales son potenciales recolectores de información, que el registro de niños sea escrito y ratificado con el consentimiento de los padres o con algún otro método de reconocimiento de guardia legal, que permita recolectar información personal identificable de un menor de edad.',
	),
	array(
		0	=> '¿Por qué no puedo registrarme?',
		1	=> 'Es posible que la administración del foro haya baneado tu dirección IP o deshabilitara el nombre de usuario con el cual estás intentando registrarte. También pudo haber deshabilitado el registro de nuevos usuarios. Ponete en contacto con La Administración del sitio.',
	),
	array(
		0	=> '¿Cuál es la función de "Borrar todas las cookies del Sitio"?',
		1	=> '"Borrar todas las cookies del Sitio" borra las cookies creadas por phpBB, las cuales te mantienen autorizado para acceder a determinados recursos del foro y estar identificado al mismo. También proveen funciones como leer el seguimiento de la navegación del foro por el usuario si la administración ha habilitado la opción. Si estás teniendo problemas con el ingreso o salida del foro, borrar las cookies seguramente ayudará.',
	),
	array(
		0	=> '--',
		1	=> 'Preferencias de usuario y configuraciones',
	),
	array(
		0	=> '¿Cómo se puede cambiar mi configuración?',
		1	=> 'Si sos un usuario registrado, todos tus datos y configuraciones están archivados en nuestra base de datos. Para modificarlos, visita el Panel de Control de Usuario; el enlace se encuentra en la parte superior de las páginas del foro. Este sistema te permitirá cambiar tus datos y preferencias.',
	),
	array(
		0	=> '¡La hora en los foros no es correcta!',
		1	=> 'La hora no es correcta, es posible que estés viendo la hora correspondiente a otra zona horaria. Si este es el caso, visita el Panel de Control de Usuario y definí tu zona horaria de acuerdo a tu ubicación, e.j. Londres, París, Nueva York, Sydney, etc. Recordá que para cambiar la zona horaria, como las demás preferencias, debes estar registrado. Si no lo estás, este es un buen momento para hacerlo.',
	),
	array(
		0	=> 'Cambié la zona horaria en mi perfil, ¡pero el tiempo sigue siendo incorrecto!',
		1	=> 'Si estás seguro de que de la zona horaria es correcta al igual que el horario de verano establecido, y la hora sigue siendo incorrecta, entonces la hora almacenada en el servidor es incorrecta. Por favor comunícate con La Administración para corregir el problema.',
	),
	array(
		0	=> '¡Mi idioma no está en la lista!',
		1	=> 'Esto se puede deber a que la administración no ha instalado el paquete de tu idioma para el foro o nadie ha creado una traducción. Pregúntale al administrador si puede instalar el paquete del idioma que necesita. Si el paquete no existe, sentíte libre de hacer una traducción. Podes encontrar más información en el sitio de phpBB (ver el enlace al final de la página).',
	),
	array(
		0	=> '¿Cómo se puede poner una imagen debajo de mi nombre de usuario?',
		1	=> 'Hay dos imágenes que pueden aparecer debajo de tu nombre de usuario cuando estés viendo los mensajes. Dependiendo de la plantilla que utilice el foro, la primera imagen está asociada a la posición (rank) del usuario, generalmente en forma de estrellas, bloques o puntos, indicando la cantidad de mensajes que publicaste o el status dentro del foro. La segunda, usualmente una imagen más grande, es conocida como avatar y generalmente es única o personal para cada usuario. Es la administración quien decide si se pueden usar o no y en que tamaño y peso pueden ser publicadas. En caso de que no este disponible la opción de avatar, comunícate con La Administración y pedí que sea activada.',
	),
	array(
		0	=> '¿Cómo se puede cambiar mi rango?',
		1	=> 'Rangos, los cuales aparecen debajo del nombre de usuario, indican la cantidad de publicaciones realizadas por el usuario o la posición del mismo dentro del foro, e.j. moderadores y administradores. En general, no podes cambiar tu rango directamente ya que está determinado por la administración. Por favor, no abuses de mensajeear innecesariamente solo para incrementar tu rango. La mayoría de los foros no toleran esta acción y moderadores o administradores reducirán el número de publicaciones realizadas, hasta incluso pueden banearte.',
	),
	array(
		0	=> 'Cuando hago clic sobre el enlace de e-mail de un usuario, ¡me pide que me registre!',
		1	=> 'Solo usuarios registrados pueden enviar e-mail a otros usuarios a través del foro, si la administración habilitara la opción. Esto es para prevenir el uso malicioso del sistema de e-mail por usuarios anónimos.',
	),
	array(
		0	=> '--',
		1	=> 'Publicación de mensajes',
	),
	array(
		0	=> '¿Cómo se puede publicar un mensaje en el foro?',
		1	=> 'Para publicar un nuevo tema en el foro regístrate como miembro, haciendo clic en el enlace de registro, generalmente arriba de cada página. Seguramente necesitas registrarte antes de poder publicar y responder. Abajo de cada foro encontrarás una lista de acciones permitidas. Ejemplo: Podes publicar nuevos temas, Podés votar en las encuestas, etc.',
	),
	array(
		0	=> '¿Cómo se puede editar o borrar un mensaje?',
		1	=> 'A menos que seas administrador o moderador, solo podes borrar o editar tus propios mensajes. Para editarlos debes hacer clic en en botón <em>editar</em>, a veces esta opción solo es válida durante un cierto periodo de tiempo. Si alguien editó tu tema, encontrarás un pequeño texto en el suyo diciendo que ha sido modificado y las veces que lo ha sido. No aparece si fue un moderador o la administración quién lo editó, aunque la mayoría de las veces dejan un mensaje aclaratorio. Los usuarios normales no podrán borrar sus temas después de que alguien haya respondido al mismo.',
	),
	array(
		0	=> '¿Cómo se puede añadir una firma a mi mensaje?',
		1	=> 'Para añadir una firma a tus mensajes debes crearla en el Panel de Control de Usuario. Una vez creada, activá la opción <em>Añadir firma</em> cuando publiques un mensaje. Podes asignar una firma por defecto a todos tus mensajes activando la casilla correcta en tu perfil. Para dejar de añadirla en los mensajes, debes desactivar la opción <em>Añadir firma</em> dentro del perfil.',
	),
	array(
		0	=> '¿Cómo creo una encuesta?',
		1	=> 'Cuando inicias un nuevo tema o editas el primer mensaje del mismo, debes hacer clic en la etiqueta "Agregar Encuesta" debajo del formulario de publicación; si no la visualizas, significa que no posees los permisos apropiados para crear encuestas. Inserta un título y al menos dos opciones en el campo apropiado, asegurándote de que cada opción se encuentre en la correspondiente línea del formulario. También podes elegir el número de opciones que el usuario puede seleccionar en la etiqueta "Opciones por usuario", el tiempo límite en días para la encuesta (0 para duración infinita) y por último la opción de permitir a lo usuarios cambiar su votos.',
	),
	array(
		0	=> '¿Por qué no se puede añadir más opciones a la encuesta?',
		1	=> 'El límite para opciones de una encuesta es fijado por la administración. Si sentís que necesitas añadir más opciones de las permitidas a la encuesta, comunícate con La Administración del foro.',
	),
	array(
		0	=> '¿Cómo edito o borro una encuesta?',
		1	=> 'Como en los mensajes, las encuestas solo pueden ser modificadas por su creador original, un moderador o la administración. Para editar una encuesta, hace clic para editar el primer mensaje del tema; este siempre esta asociado a la encuesta. Si nadie ha votado, los usuarios pueden borrar la encuesta o editar las opciones. Sin embargo, si algún miembro ha votado, solo moderadores o administradores pueden editar o borrar la encuesta. Esto evita que las encuestas sean cambiadas a mitad de la votación.',
	),
	array(
		0	=> '¿Por qué no se puede acceder a algún foro?',
		1	=> 'Algunos foros pueden estar limitados para ciertos usuarios o grupos y para visualizar, leer, publicar o llevar a cabo otra acción acá necesitas una autorización especial. Comunícate con un moderador o administrador del foro para que se te conceda el acceso.',
	),
	array(
		0	=> '¿Por qué no se puede añadir archivos adjuntos?',
		1	=> 'Los permisos para adjuntar archivos son individuales para cada foro, grupo, usuario y son cedidos por la administración. Tal vez la administración no permite adjuntar archivos en el foro en que te encontrás ó solo ciertos grupos pueden hacerlo. Comunícate con La Administración si no estás seguro de por qué no podes adjuntar archivos.',
	),
	array(
		0	=> '¿Por qué recibí una advertencia?',
		1	=> 'Los administradores de cada foro tienen su propio conjunto de reglas para su sitio. Si has quebrantado alguna regla podes recibir una advertencia. Por favor recordá que esta es una decisión de la administración del foro, y el phpBB Group no tiene nada que ver con las advertencias dadas en este sitio. Comunícate con La Administración del foro si no estás seguro de porqué fuiste advertido.',
	),
	array(
		0	=> '¿Cómo se puede reportar un mensaje a un moderador?',
		1	=> 'Si la administración lo permite, deberías ver un botón para reportar mensajes cerca del mismo. Haciendo clic sobre el botón, el foro te llevará y guiará a través de ciertos pasos necesarios para reportar el mensaje.',
	),
	array(
		0	=> '¿Para qué sirve el botón "Guardar" en la publicación de temas?',
		1	=> 'Esto te permitirá guardar borradores que serán completados y enviados más tarde. Para recargar un borrador guardado, visita el Panel de Control de Usuario.',
	),
	array(
		0	=> '¿Por qué mis mensajes necesitan ser aprobados?',
		1	=> 'la administración del foro tal vez ha decidido que los mensajes publicados en el foro, en el que estás mensajeando, necesiten ser revisados antes de aprobarlos. También es posible que la administración te haya ubicado en un grupo de usuarios cuyos mensajes necesitan ser revisados antes de aprobarlos. Por favor comunícate con el administrador para más información al respecto.',
	),
	array(
		0	=> '¿Cómo hago para reactivar un tema?',
		1	=> 'Podes hacerlo dándole clic al enlace que dice the "Reactivar tema" cuando estés viendo el mismo, puede "reactivar" el tema al principio de la primer página. Sin embargo, si no lo visualizas, entonces el tema reactivado ha sido deshabilitado o el tiempo para poder reactivarlo no ha sido alcanzado aún. También es posible reactivar un tema respondiendo al mismo, sin embargo lea las reglas del foro antes de hacerlo.',
	),
	array(
		0	=> '--',
		1	=> 'Formatos y tipos de temas',
	),
	array(
		0	=> '¿Qué es el código BBCode?',
		1	=> 'BBcode es una implementación especial de HTML, ofrece un gran control de formato de los objetos particulares de las publicaciones. El uso de BBCode debe ser habilitado por la administración, pero también puede ser deshabilitado del formulario de mensajes. BBCode a si mismo es similar en estilo al HTML, pero los tags se encuentran encerrados entre corchetes [ y ] en lugar de &lt; y &gt;. Para más información podes ver el manual de BBCode. El enlace aparece cada vez que vas a publicar un mensaje.',
	),
	array(
		0	=> '¿Puedo usar HTML?',
		1	=> 'No. No es posible publicar en HTML. Muchos de los formatos y acciones que se pueden ejecutar utilizando HTML pueden ser aplicados utilizando BBCodes.',
	),
	array(
		0	=> '¿Qué son los emoticones?',
		1	=> 'Los emoticones son pequeñas imágenes que pueden ser utilizadas para expresar un sentimiento con un pequeño código, e.j. :) denota felicidad, mientras que :( denota tristeza. La lista completa de emoticones puede verse en el formulario de publicación. Trata de no abusar del uso de emoticones, pues pueden hacer que un mensaje se vuelva muy difícil de leer y un moderador remueva el tema o los emoticones del mensaje. La administración puede fijar un límite para el número de emoticones a utilizarse en un mensaje.',
	),
	array(
		0	=> '¿Puedo publicar imágenes?',
		1	=> 'Sí, las imágenes se pueden mostrar en tus mensajes. Si la administración permite adjuntar archivos, podes subir la imagen directamente al foro. De otra manera, debés guardar primero tu foto en un servidor de acceso público, e.j. http://www.ejemplo.com/mi-imagen.gif. No podes publicar imágenes que se encuentren en tu PC (a menos que sea un servidor de acceso público) ni tampoco las que se encuentren guardadas bajo mecanismos de autentificación, e.j. hotmail o yahoo correo, sitios protegidos por contraseñas, etc. Para exhibir imágenes utiliza el BBCode cuya etiqueta es [img].',
	),
	array(
		0	=> '¿Qué son los anuncios globales?',
		1	=> 'Los anuncios globales contienen información importante y deberías leerlos cada vez que sea posible. Éstos aparecerán al principio de cada foro y en el Panel de Control de Usuario. Los permisos para anuncios globales son otorgados por la administración.',
	),
	array(
		0	=> '¿Qué son los anuncios?',
		1	=> 'Los anuncios muchas veces contienen información importante sobre el foro que te encuentras leyendo y deberías leerlos cada vez que sea posible. Los anuncios aparecen al principio de cada página en el foro donde se publicaron. Como en los anuncios globales, los permisos para anuncios son otorgados por la administración.',
	),
	array(
		0	=> '¿Qué son los temas fijos?',
		1	=> 'Los temas fijos aparecen en el foro por debajo de los anuncios y solo en la primer página. Muchas veces son importantes por lo que deberías leerlos cada vez que sea posible. Como en los anuncios globales y anuncios, los permisos para fijar un tema son otorgados por La Administración.',
	),
	array(
		0	=> '¿Qué son los temas cerrados?',
		1	=> 'Los temas cerrados son temas donde los usuarios ya no pueden responder y las encuestas ahí contenidas terminaron automáticamente. Los temas pueden ser cerrados por muchas razones. Esta decisión es tomada por la administración o un moderador. Tal vez podes cerrar tus propios temas dependiendo de los permisos que te hayan concedido los administradores.',
	),
	array(
		0	=> '¿Qué son los iconos para los temas?',
		1	=> 'Son imágenes elegidas por el autor del tema para indicar el contenido del mismo. La posibilidad de usar iconos en los mensajes depende de los permisos otorgados por La Administración.',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0	=> '--',
		1	=> 'Niveles de usuario y grupos',
	),
	array(
		0	=> '¿Qué son los Administradores?',
		1	=> 'Los Administradores son los usuarios asignados con el mayor nivel de control sobre el foro entero. Estos usuarios pueden controlar todas las acciones y configuraciones del foro, incluyendo configuraciones de permisos, banneo de usuarios, creación de grupos usuarios y moderadores, etc. Dependen del fundador del foro y de los permisos que éste les ha dado. Ellos también tienen todas las capacidades de moderación en cada uno de los foros, dependiendo de las configuraciones realizadas por el fundador del sitio.',
	),
	array(
		0	=> '¿Qué son los Moderadores?',
		1	=> 'Los Moderadores son individuos (o grupos de individuos) que cuidan el foro día a día. Tienen la autoridad para editar o borrar mensajes, cerrarlos, abrirlos, moverlos, borrar y separar temas en el foro que moderan. Generalmente, los moderadores están presentes para evitar que los usuarios se salgan del tema tratado o publiquen spam y/o contenido malicioso.',
	),
	array(
		0	=> '¿Qué son los Grupos de Usuarios?',
		1	=> 'Los Grupos de Usuarios son conjuntos de usuarios que dividen a la comunidad en sectores manejables con los cuales pueden trabajar los administradores del foro. Cada usuario puede pertenecer a varios grupos y cada grupo puede tener diferentes permisos. Esto provee de una fácil manera, a los administradores, de cambiar los permisos para muchos usuarios a la vez, tales como cambiar permiso de moderador o garantizar el acceso a foros privados a los usuarios.',
	),
	array(
		0	=> '¿Dónde están los Grupos de Usuarios y como me se puede unir a ellos?',
		1	=> 'Podes ver todos los Grupos de usuarios a través del enlace "Grupos de Usuarios". Si deseas unirte a algún grupo, podes proceder haciendo clic en el botón apropiado. No todos los grupos tienen libre acceso. Sin embargo, algunos requieren aprobación para poder unirse, otros están cerrados y algunos son ocultos. Si el grupo se encuentra abierto, podes unirte haciendo clic en el botón correspondiente. Si el grupo requiere de aprobación para unirse, podes solicitar la membresía haciendo clic en el botón correspondiente. El responsable del grupo deberá aprobar tu solicitud y seguramente le preguntará por qué deseas hacerlo. Por favor no molestes continuamente al Responsable de Grupo si rechaza tu solicitud; seguramente tenga sus razones.',
	),
	array(
		0	=> '¿Cómo me convierto en Responsable del Grupo?',
		1	=> 'El Responsable de un grupo es asignado por la administración al crear el grupo. Si estás interesado en crear un grupo de usuarios, tu primer punto de contacto debe ser la administración; proba enviándole un mensaje privado.',
	),
	array(
		0	=> '¿Por qué algunos Grupos de Usuarios aparecen en diferentes colores?',
		1	=> 'La administración del foro tiene la posibilidad de asignar un color a los usuarios de un grupo para hacer más fácil tu identificación.',
	),
	array(
		0	=> '¿Qué es un "Grupo de Usuarios predeterminado"?',
		1	=> ' Si sos miembro de más de un grupo tu grupo por omisión se usa para determinar que color y rango se mostrará por omisión. La administración del Sitio debe darte permisos para cambiar tu grupo por omisión mediante su Panel de Control de Usuario.',
	),
	array(
		0	=> '¿Qué es el enlace "El equipo"?',
		1	=> 'Esta página te provee la lista completa de los usuarios del grupo, incluyendo los administradores y moderadores del foro y otros detalles, como los foros que se encargan de moderar cada uno.',
	),
	array(
		0	=> '--',
		1	=> 'Mensajería privada',
	),
	array(
		0	=> '¡No se puede enviar un mensaje privado!',
		1	=> 'Hay tres razones posibles; no estás registrado y/o no identificado, la administración del foro ha deshabilitado la opción de mensajes privados para todos los usuarios, ó la administración ha deshabilitado para vos la opción de enviar mensajes. Comunícate con La Administración para más información.',
	),
	array(
		0	=> '¡Sigo recibiendo mensajes privados no deseados!',
		1	=> 'Podés bloquear a un usuario para que no te pueda enviar mensajes dentro de las opciones del Panel de Control de Usuario. Si estás recibiendo mensajes maliciosos u ofensivos de un usuario en particular comunícate con la administración, es ella quien tiene el poder para evitar que un usuario no pueda enviar mensajes privados a todos los demás.',
	),
	array(
		0	=> '¡Recibí spam o correos maliciosos de alguien en este foro!',
		1	=> 'Lamentamos oír eso. Como característica el formulario de e-mail incluye protectores para controlar quién ha enviado tales mensajes, por lo tanto, podés enviarle por e-mail a la administración del foro una copia completa del mensaje que recibiste. Es muy importante que incluyas la cabecera porque contiene los datos del usuario que envió el e-mail. La administración puede tomar acciones.',
	),
	array(
		0	=> '--',
		1	=> 'Amigos e Ignorados',
	),
	array(
		0	=> '¿Qué es la lista de Mis Amigos e Ignorados?',
		1	=> 'Podes utilizar la lista para organizar otros usuarios del foro. Los usuarios añadidos a tu lista de Amigos podrán verse en el Panel de Control de Usuario para un rápido acceso a ver si están identificados y poder así enviarles un mensaje privado. Según la plantilla que utilice el foro, los mensajes de estos usuarios pueden visualizarse resaltados. Si añadís un usuario a tu lista de Ignorados, todos tus mensajes serán ocultados.',
	),
	array(
		0	=> '¿Cómo se puede añadir ó borrar usuarios de mi lista de Amigos e Ignorados?',
		1	=> 'Podes añadir usuarios a tu lista de dos maneras. En cada perfil de usuario hay un enlace para añadirlo a tu lista de Amigos y/o Ignorados. Otra alternativa es desde el Panel de Control de Usuario, añadiendo un usuario directamente ingresando su nombre. También podes eliminar usuarios de tu lista desde esta misma página.',
	),
	array(
		0	=> '--',
		1	=> 'Búsqueda en los foros',
	),
	array(
		0	=> '¿Cómo se puede buscar en uno o varios foros?',
		1	=> 'Ingresando un término de búsqueda en el campo correspondiente del buscador del Index, foro ó en los temas. Podes acceder a búsquedas avanzadas haciendo clic en el enlace "Búsqueda Avanzada" que está disponible en todas las páginas del foro. La manera de acceder a la búsqueda depende del estilo utilizado.',
	),
	array(
		0	=> '¿Por qué mi búsqueda me devuelve ningún resultado?',
		1	=> 'Probablemente tu búsqueda fue muy general e incluye muchos términos comunes que no son indexados por phpBB3. Sé más específico y utiliza las opciones disponibles en la búsqueda avanzada.',
	),
	array(
		0	=> '¿Por qué mi búsqueda me devuelve una página en blanco?',
		1	=> 'La búsqueda devolvió muchos resultados para ser procesados por el servidor. Utiliza "Búsqueda Avanzada" y sé más específico en los términos y foros a buscar.',
	),
	array(
		0	=> '¿Cómo busco usuarios?',
		1	=> 'Pulsa en el enlace "Usuarios" y hace clic en el enlace "Buscar un usuario".',
	),
	array(
		0	=> '¿Como se puede encontrar mis propios mensajes y temas?',
		1	=> 'Podes encontrar tus mensajes haciendo clic en  "Mostrar tus mensajes" en el Panel de Control de Usuario o a través de tu propio perfil. Para buscar tus temas, utiliza la página de búsqueda avanzada y completa las opciones apropiadas.',
	),
	array(
		0	=> '--',
		1	=> 'Suscripción y Añadido de temas a Favoritos',
	),
	array(
		0	=> '¿Cuál es la diferencia entre añadir como Favorito y suscribirme a un tema?',
		1	=> 'Añadir un tema como Favorito en phpBB3 es como Añadir un sitio como Favorito en tu navegador. No se te avisa cuando hay una actualización o respuesta, pero podés seguir visitando el tema para ver las modificaciones más tarde. Al suscribirte, a diferencia de añadir a Favoritos, se te avisará de diversos métodos de actualizaciones en los temas y foros que hayas seleccionado.',
	),
	array(
		0	=> '¿Cómo me suscribo a un foro o tema específico?',
		1	=> 'Para suscribirte a un foro en especial, debes hacer clic en el enlace "Suscribir Foro". Para suscribirte a un tema, debes activar la casilla "Subscribir" cuando envíes una respuesta al mismo o hacer clic en el enlace "Subscribir tema".',
	),
	array(
		0	=> '¿Cómo borro mis suscripciones?',
		1	=> 'Para eliminar tus suscripciones, debes entrar en el Panel de Control de Usuario y hacer clic en la etiqueta "Organizar suscripciones".',
	),
	array(
		0	=> '--',
		1	=> 'Archivos Adjuntos',
	),
	array(
		0	=> '¿Qué archivos adjuntos son permitidos en este foro?',
		1	=> 'Cada foro puede permitir o no ciertos tipos de archivos adjuntos. Si no estás seguro de que tipos de archivos se pueden cargar comunicate con La Administración para obtener más información.',
	),
	array(
		0	=> '¿Cómo encuentro todos mis archivos adjuntos?',
		1	=> 'Para encontrar la lista de tus archivos adjuntos, debes entrar en el Panel de Control de Usuario y hacer clic en la etiqueta "Organizar adjuntos".',
	),
	array(
		0	=> '--',
		1	=> 'Acerca de phpBB3',
	),
	array(
		0	=> '¿Quién programó este foro?',
		1	=> 'Esta aplicación (en su forma original) es desarrollada, publicada y contiene derechos de autor pertenecientes a <a href="https://www.phpbb.com/">phpBB Group</a>. Está hecho bajo la GNU (Licencia Pública General) y es de libre distribución. Visita el enlace para más detalles.',
	),
	array(
		0	=> '¿Por qué este foro no tiene tal cosa?',
		1 => 'Este foro fue escrito y licenciado a través de phpBB Group. Si usted cree que se debe añadir alguna característica por favor visita <a href="https://www.phpbb.com/ideas/">Centro de Ídeas phpBB</a>, donde se puede votar en ideas existentes o sugerir nuevas características.'
	),
	array(
		0	=> '¿Con quién se puede contactar acerca de abusos o usos ilegales relacionados con este foro?',
		1	=> 'Cada uno de los administradores que figuran en la lista del grupo donde dice "El Equipo" es un contacto apropiado para enviar tus quejas. Si así no obtenés respuesta deberías tratar de contactar con el dueño del dominio (efectúa una <a href="http://www.google.com/search?q=whois">búsqueda whois</a>) o, si este foro tiene correo sobre un dominio gratuito (Yahoo!, gmail.com, hotmail.com, etc.), al departamento o administración de abusos de ese servicio. Por favor, tené en cuenta que el Grupo phpBB <strong>carece de cualquier tipo de control</strong> y no puede ser de ninguna manera responsable sobre cómo, dónde o por quién es usado este sistema de foros. No tiene ningún sentido contactar con el Grupo phpBB en relación a asuntos legales (difamación, responsabilidad, deformación de comentarios, etc.) que no sean con respecto al sitio phpbb.com o la discreción misma del software phpBB. Si envías un correo al Grupo phpBB <strong>respecto del uso de terceras partes</strong> de este software esté dispuesto a recibir una respuesta cortante o directamente no recibir respuesta.',
	),
);

?>