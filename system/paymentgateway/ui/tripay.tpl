{include file="sections/header.tpl"}

<form class="form-horizontal" method="post" role="form" action="{$_url}paymentgateway/tripay" >
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-primary panel-hovered panel-stacked mb30">
                <div class="panel-heading">Tripay</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Código de comerciante</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="tripay_merchant" name="tripay_merchant" placeholder="T" value="{$_c['tripay_merchant']}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">API Key</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="tripay_api_key" name="tripay_api_key" value="{$_c['tripay_api_key']}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Llave secreta</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="tripay_secret_key" name="tripay_secret_key" value="{$_c['tripay_secret_key']}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">URL de notificación</label>
                        <div class="col-md-6">
                            <input type="text" readonly class="form-control" onclick="this.select()" value="{$_url}callback/tripay">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Canales</label>
                        <div class="col-md-6">
                            {foreach $channels as $channel}
                                <label class="checkbox-inline"><input type="checkbox" {if strpos($_c['tripay_channel'], $channel['id']) !== false}checked="true"{/if} id="tripay_channel" name="tripay_channel[]" value="{$channel['id']}"> {$channel['name']}</label>
                            {/foreach}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Save']}</button>
                            <a class="btn btn-info waves-effect waves-light" href="https://tripay.co.id/?ref=TP19304" target="_blank">Regístrese en Tripay</a>
                        </div>
                    </div>
                        <pre>/ip hotspot walled-garden
add dst-host=tripay.co.id
add dst-host=*.tripay.co.id</pre>
<small id="emailHelp" class="form-text text-muted">Set Telegram Bot to get any error and notification</small>
                </div>
            </div>

        </div>
    </div>
</form>
{include file="sections/footer.tpl"}
