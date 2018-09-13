<?php

namespace Gloudemans\Shoppingcart;

use Illuminate\Database\Eloquent\Model;

class ShopSettings extends Model
{
    // Shop Settings - specific to WorldPay setup for now
    protected $table = "shop_settings";
    protected $fillable = array('instId', 'cartId', 'currency','min_shipping','free_shipping','shipping_calc_method', 'mail_recipient', 'mail_subject','uk_shipping','os_shipping');      

}
            
