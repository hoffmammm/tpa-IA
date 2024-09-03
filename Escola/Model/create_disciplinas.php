public function up()
{
    Schema::create('disciplinas', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->text('descricao')->nullable();
        $table->timestamps();
    });
}
