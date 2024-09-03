public function up()
{
    Schema::create('professores', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('email')->unique();
        $table->timestamps();
    });
}
