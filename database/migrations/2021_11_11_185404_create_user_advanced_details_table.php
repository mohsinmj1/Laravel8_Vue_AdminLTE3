<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAdvancedDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_advanced_details', function (Blueprint $table) {
            $table->integer('uad_id');
            $table->integer('user_id');
            $table->string('allocation_invoice');
            $table->string('monthly_invoice');
            $table->string('neg_creditnotes');
            $table->string('timesheet_attachment');
            $table->string('paper_invoices');
            $table->integer('sep_Exp_Timesheets');
            $table->integer('sep_Exp_Time_inv');
            $table->string('placement');
            $table->string('manager');
            $table->string(' Purchase_Order');
            $table->string('worker');
            $table->string('sales_branch');
            $table->integer('Sales_Cost');
            $table->integer('sales_Dept');
            $table->string('Sales_division');
            $table->string('Sales_Location');
            $table->string('Sales_Sector');
            $table->string('Sales_Project');
            $table->string('Purchase_Branch');
            $table->integer('Purchase_Cost');
            $table->integer('Purchase_Dept');
            $table->string('Purchase_division');
            $table->string('Purchase_Location');
            $table->string('Purchase_Sector');
            $table->string('Purchase_Project');
            $table->string('Client_Site');
            $table->string('Job_Title');
            $table->string('Job_Description');
            $table->string('Items_diff_dates');
            $table->string('Rate_Name');
            $table->string('Purchase_Branch');
            $table->integer('Pay_Element');
            $table->integer('Rate');
            $table->string('Payroll_Reference');
            $table->string('Freehand_Reference');
            $table->string('Perm');
            $table->string('Milestone');
            $table->string('PO_approval');
            $table->string('PO_Req_Shift');
            $table->string('Tax_Rate');
            $table->string('VAT_Code');
            $table->string('Gross_Up');
            $table->string('Invoice_Description');
            $table->string('PAYE_Processing');
            $table->string('Pay_run_day');
            $table->string('Intermediary ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_advanced_details');
    }
}
