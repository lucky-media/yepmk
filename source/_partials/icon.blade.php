@if($name === 'facebook')
<svg xmlns="http://www.w3.org/2000/svg" class="fill-current {{ $class }}" fill="none" viewBox="0 0 24 24">
    <defs/>
    <path d="M20.625 2.625H3.375a.75.75 0 00-.75.75v17.25c0 .415.335.75.75.75h17.25a.75.75 0 00.75-.75V3.375a.75.75 0 00-.75-.75zm-2.166 5.473h-1.497c-1.175 0-1.402.557-1.402 1.378v1.807h2.803l-.365 2.829H15.56v7.263h-2.923v-7.26h-2.444v-2.832h2.444V9.197c0-2.421 1.48-3.74 3.64-3.74 1.036 0 1.925.077 2.185.112v2.529h-.003z"/>
</svg>

@elseif($name === 'instagram')
<svg xmlns="http://www.w3.org/2000/svg" class="fill-current {{ $class }}" fill="none" viewBox="0 0 24 24">
    <defs/>
    <path d="M12 8.876A3.13 3.13 0 008.876 12 3.13 3.13 0 0012 15.124 3.13 3.13 0 0015.124 12 3.13 3.13 0 0012 8.876zM21.37 12c0-1.294.012-2.576-.06-3.867-.073-1.5-.415-2.831-1.512-3.928-1.1-1.1-2.428-1.44-3.928-1.512-1.294-.073-2.576-.061-3.867-.061-1.294 0-2.576-.012-3.868.061-1.5.073-2.831.415-3.928 1.512-1.1 1.099-1.439 2.428-1.512 3.928-.072 1.294-.06 2.576-.06 3.867s-.012 2.576.06 3.867c.073 1.5.415 2.831 1.512 3.928 1.1 1.1 2.428 1.44 3.928 1.512 1.294.073 2.576.061 3.867.061 1.294 0 2.576.012 3.868-.061 1.5-.073 2.83-.415 3.928-1.512 1.099-1.099 1.439-2.428 1.512-3.928.075-1.291.06-2.573.06-3.867zM12 16.807A4.8 4.8 0 017.193 12 4.8 4.8 0 0112 7.193 4.8 4.8 0 0116.807 12 4.8 4.8 0 0112 16.807zm5.004-8.688a1.121 1.121 0 01-1.123-1.123c0-.621.502-1.123 1.123-1.123a1.121 1.121 0 01.43 2.16 1.121 1.121 0 01-.43.086z"/>
</svg>

@elseif($name === 'youtube')
<svg xmlns="http://www.w3.org/2000/svg" class="fill-current {{ $class }}" fill="none" viewBox="0 0 24 24">
    <defs/>
    <path d="M22.062 6.94a2.631 2.631 0 00-1.857-1.859c-1.638-.44-8.205-.44-8.205-.44s-6.567 0-8.205.438a2.628 2.628 0 00-1.857 1.859C1.5 8.578 1.5 12 1.5 12s0 3.422.438 5.06a2.632 2.632 0 001.857 1.859c1.638.44 8.205.44 8.205.44s6.567 0 8.206-.44a2.628 2.628 0 001.856-1.859C22.5 15.422 22.5 12 22.5 12s0-3.422-.438-5.06zm-12.148 8.2V8.86l5.438 3.117-5.438 3.164z"/>
</svg>

@elseif($name === 'linkedin')
<svg xmlns="http://www.w3.org/2000/svg" class="fill-current {{ $class }}" fill="none" viewBox="0 0 24 24">
    <defs/>
    <path d="M20.625 2.625H3.375a.75.75 0 00-.75.75v17.25c0 .415.335.75.75.75h17.25a.75.75 0 00.75-.75V3.375a.75.75 0 00-.75-.75zM8.187 18.602H5.405V9.654h2.782v8.948zM6.797 8.43a1.612 1.612 0 110-3.224 1.612 1.612 0 010 3.224zm11.805 10.172h-2.78V14.25c0-1.038-.018-2.372-1.445-2.372-1.447 0-1.67 1.13-1.67 2.297v4.427H9.93V9.654h2.668v1.223h.037c.37-.703 1.277-1.446 2.632-1.446 2.817 0 3.335 1.854 3.335 4.264v4.907z"/>
</svg>

@endif