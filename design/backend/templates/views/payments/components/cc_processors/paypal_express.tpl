<div class="control-group">
    <label class="control-label" for="username">{__("username")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][username]" id="username" size="24" value="{$processor_params.username}" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="password">{__("password")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][password]" id="password" size="24" value="{$processor_params.password}" >
    </div>
</div>

<div class="control-group">
    <label class="control-label">{__("paypal_authentication_method")}:</label>
    <div class="controls">
        <label class="radio inline" for="elm_payment_auth_method_cert">
            <input id="elm_payment_auth_method_cert" type="radio" value="cert" name="payment_data[processor_params][authentication_method]" {if $processor_params.authentication_method == "cert" || !$processor_params.authentication_method} checked="checked"{/if}>
            {__("certificate")}
        </label>
        
        <label class="radio inline" for="elm_payment_auth_method_signature">
            <input id="elm_payment_auth_method_signature" type="radio" value="signature" name="payment_data[processor_params][authentication_method]" {if $processor_params.authentication_method == "signature"} checked="checked"{/if}>
            {__("signature")}
        </label>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="certificate">{__("certificate_filename")}:</label>
    <div class="controls">
        <div class="text-type-value pull-left">{$smarty.const.DIR_ROOT}/app/payments/certificates/&nbsp;</div>
        <input type="text" name="payment_data[processor_params][certificate]" id="certificate" size="24" value="{$processor_params.certificate}" class="pull-left">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="signature">{__("signature")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][signature]" id="signature" value="{$processor_params.signature}" >
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="send_adress">{__("send_shipping_address")}:</label>
    <div class="controls">
        <input type="checkbox" name="payment_data[processor_params][send_adress]" {if $processor_params.send_adress == "Y"}checked="checked"{/if} id="send_adress" value="Y">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="currency">{__("currency")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency">
            <option value="CAD" {if $processor_params.currency == "CAD"}selected="selected"{/if}>{__("currency_code_cad")}</option>
            <option value="EUR" {if $processor_params.currency == "EUR"}selected="selected"{/if}>{__("currency_code_eur")}</option>
            <option value="GBP" {if $processor_params.currency == "GBP"}selected="selected"{/if}>{__("currency_code_gbp")}</option>
            <option value="USD" {if $processor_params.currency == "USD"}selected="selected"{/if}>{__("currency_code_usd")}</option>
            <option value="JPY" {if $processor_params.currency == "JPY"}selected="selected"{/if}>{__("currency_code_jpy")}</option>
            <option value="AUD" {if $processor_params.currency == "AUD"}selected="selected"{/if}>{__("currency_code_aud")}</option>
            <option value="NZD" {if $processor_params.currency == "NZD"}selected="selected"{/if}>{__("currency_code_nzd")}</option>
            <option value="CHF" {if $processor_params.currency == "CHF"}selected="selected"{/if}>{__("currency_code_chf")}</option>
            <option value="SGD" {if $processor_params.currency == "SGD"}selected="selected"{/if}>{__("currency_code_sgd")}</option>
            <option value="SEK" {if $processor_params.currency == "SEK"}selected="selected"{/if}>{__("currency_code_sek")}</option>
            <option value="DKK" {if $processor_params.currency == "DKK"}selected="selected"{/if}>{__("currency_code_dkk")}</option>
            <option value="PLN" {if $processor_params.currency == "PLN"}selected="selected"{/if}>{__("currency_code_pln")}</option>
            <option value="NOK" {if $processor_params.currency == "NOK"}selected="selected"{/if}>{__("currency_code_nok")}</option>
            <option value="HUF" {if $processor_params.currency == "HUF"}selected="selected"{/if}>{__("currency_code_huf")}</option>
            <option value="CZK" {if $processor_params.currency == "CZK"}selected="selected"{/if}>{__("currency_code_czk")}</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="mode">{__("test_live_mode")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][mode]" id="mode">
            <option value="test" {if $processor_params.mode eq "test"} selected="selected"{/if}>{__("test")}</option>
            <option value="live" {if $processor_params.mode eq "live"} selected="selected"{/if}>{__("live")}</option>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="order_prefix">{__("order_prefix")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][order_prefix]" id="order_prefix" size="36" value="{$processor_params.order_prefix}" >
    </div>
</div>