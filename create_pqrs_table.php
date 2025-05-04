$table->id();
$table->foreignId('user_id')->constrained()->cascadeOnDelete();
$table->string('subject');
$table->enum('type', ['solicitud','queja','reclamo','sugerencia']);
$table->text('message');
$table->string('attachment')->nullable();
$table->enum('status', ['pendiente','en_proceso','resuelto'])->default('pendiente');
$table->timestamps();

