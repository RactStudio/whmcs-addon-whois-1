<div class="row">
    <div class="col-lg-12 col-lg-offset-3">
        <form
                method="POST"
                action="{$moduleLink}"
                class="form-inline"
        >
            <div class="col-lg-12 align-content-center">
                <div class="input-group col-lg-8">

                    <input
                            type="text"
                            class="form-control input-lg"
                            placeholder="example.com"
                            name="domainName"
                            value="{$domainName}"
                    />
                    <span class="input-group-btn">
                    <button
                            class="btn btn-primary btn-lg"
                            type="submit"
                    >
                        GET WHOIS
                    </button>
                </span>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
<br>
<div class="row">


    {if !empty($whoisData) }
        <div class="panel panel-primary">
            <div class="panel-heading">WHOIS Data for <strong>{$domainName}</strong></div>
            <div class="panel-body">

                {$whoisData}

            </div>
        </div>
    {/if}
</div>