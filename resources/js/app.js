import Alpine from 'alpinejs'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'

import * as bootstrap from 'bootstrap';

Alpine.plugin(FormsAlpinePlugin)

window.Alpine = Alpine

Alpine.start()
