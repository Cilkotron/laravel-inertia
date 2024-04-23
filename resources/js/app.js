import { createApp, h } from 'vue'
import { createInertiaApp, router } from '@inertiajs/vue3'
import NProgress from 'nprogress'
import Layout  from './Shared/Layout.vue'



createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || Layout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
  progress: {
    color: 'red', 
    showSpinner: true 
  }

})

router.on('start', () => NProgress.start())
router.on('finish', () => NProgress.done())

