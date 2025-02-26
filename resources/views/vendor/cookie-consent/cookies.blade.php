<aside id="cookies-policy" class="cookies cookies--no-js"
    data-text="{{ json_encode(__('cookieConsent::cookies.details')) }}">
    <div class="cookies__alert">
        <div class="cookies__container">
            <div class="cookies__wrapper">
                <h2 class="cookies__title">@lang('cookieConsent::cookies.title')</h2>
                <div class="cookies__intro">
                    <p>@lang('cookieConsent::cookies.intro')</p>
                    @if ($policy)
                        <p>@lang('cookieConsent::cookies.link', ['url' => $policy])</p>
                    @endif
                </div>
                <div class="cookies__actions">
                    @cookieconsentbutton(action: 'accept.essentials', label: __('cookieConsent::cookies.essentials'), attributes: ['class' => 'cookiesBtn cookiesBtn--essentials'])
                    @cookieconsentbutton(action: 'accept.all', label: __('cookieConsent::cookies.all'), attributes: ['class' => 'cookiesBtn cookiesBtn--accept'])
                </div>
            </div>
        </div>
    </div>
</aside>

{{-- STYLES & SCRIPT : feel free to remove them and add your own --}}

<script data-cookie-consent>
    {!! file_get_contents(LCC_ROOT . '/dist/script.js') !!}
</script>
<style data-cookie-consent>
    {!! file_get_contents(LCC_ROOT . '/dist/style.css') !!}
</style>
