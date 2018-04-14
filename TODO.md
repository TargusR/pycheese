** Cosas pendientes
- Registro de usuario nuevo (Login)
- Codificar entidades del registro
- Configurar entidades en EasyAdmin
- Formulario de registro para visitante
- Envío de mails
- Traducciones
- Tipo de cambio en precios mostrados
- Comunicación con paypal (o medios de pago)
---
- Formulario para escoger playeras
- Formulario de registro de mesa
- Formulario de registro de taller/panel/actividad


** Entidades

*** Visitante (Usuario y Visitante)
- Nombre
- Correo
- Edad
- :: Acceso
- :: Playeras
- :: Pagos

*** Pagos
- :: Visitante
- Fecha
- Cantidad
- Concepto (String)
- Validad (Bool)
- Redimido (Bool)

*** Acceso (UNICO)
- Nombre del acceso {Entrada general, Sponsor, Super Sponsor}
- Precio
- Vigencia
- Descripción
- Cantidad de playeras
- Ilimitado (bool)
- Inventario
- Nivel (int)
- Mejorable (bool)
- Oculto (bool)

*** Feature
- Nombre del feature { Playera extra }
- Precio
- Vigencia
- Descripción
- Cantidad de playeras
- Inventario
- Ilimitado (bool)
- Oculto

*** Playeras
- :: Visitante
- Talla
- Diseño
- Color (?)

---

*** Mesa de venta
- :: Visitante
- Nombre comercial
- Ofrece comisiones durante el evento (Bool)
- Aceptado
- Pagado

*** Contenido
- :: Visitante
- Tipo {Panel, taller, Meeting}
- Presupuesto estimado de Materiales
- Duración estimada
- Cupo máximo
- Título
- Descripción corta