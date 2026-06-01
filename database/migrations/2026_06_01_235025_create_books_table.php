public function up(): void
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();

        $table->foreignId('user_id')
              ->constrained()
              ->onDelete('cascade');

        $table->string('title');
        $table->string('author');
        $table->string('genre');

        $table->enum('status', [
            'Want To Read',
            'Currently Reading',
            'Finished'
        ]);

        $table->integer('rating')->nullable();
        $table->text('review')->nullable();

        $table->timestamps();
    });
}