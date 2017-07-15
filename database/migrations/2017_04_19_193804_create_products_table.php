<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateProductsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'sis_seg_soc_p_producto', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->string ( 'name' );
			$table->mediumText ( 'short' );
			$table->text ( 'description' );
			$table->timestamps ();
		} );
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sis_seg_soc_p_producto');
    }
}
