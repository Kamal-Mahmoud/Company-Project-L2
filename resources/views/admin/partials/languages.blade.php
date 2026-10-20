 @php
     $locale = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
 @endphp
 <a class="my-2 nav-link text-muted" href="{{ LaravelLocalization::getLocalizedURL($locale) }}" id="langSwitcher">
     {{ strtoupper($locale) }}
 </a>
