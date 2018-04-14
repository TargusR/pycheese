## Cosas pendientes
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


## Entity

### User.php
- Id
- Username
- Email
- Roles
- :: Attendee (single)

### Attendee.php
- :: User
- Name
- Age
- Badge Tag
- Access level
- Year
- :: Shirts (multiple)
- :: Payments (multiple)

### Payment.php
- :: Attendee (Single)
- Date
- Amount
- Concept (String)
- Validated (Bool)
- Redeem (Bool)

### Access.php
- Name [Entrada general, Sponsor, Super Sponsor]
- Cost
- Valid Until (date)
- Description
- Amount Of Shirts
- Unlimited (bool)
- Inventory
- Level (int)
- Upgradable (bool)
- Hidden (bool)
- :: Attendee (Multiple)

### Feature.php
- Name [Playera extra]
- Cost
- Valid Until (Date)
- Description
- Amount Of Shirts
- Unlimited (bool)
- Inventory
- Hidden

### Shirt.php
- :: Attendee (Single)
- Talla
- Diseño
- Color (?)

---

### Mesa de venta
- :: Visitante
- Nombre comercial
- Ofrece comisiones durante el evento (Bool)
- Aceptado
- Pagado

### Contenido
- :: Visitante
- Tipo {Panel, taller, Meeting}
- Presupuesto estimado de Materiales
- Duración estimada
- Cupo máximo
- Título
- Descripción corta