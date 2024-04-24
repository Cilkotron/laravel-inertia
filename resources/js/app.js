import { createApp, h } from 'vue'
import { createInertiaApp, router, Head, Link } from '@inertiajs/vue3'
import NProgress from 'nprogress'
import Layout from './Shared/Layout.vue'




createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = (name === 'Auth/Login') ? undefined : Layout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Head", Head)
      .component("Link", Link)
      .mount(el)
  },
  progress: {
    color: 'red', 
    showSpinner: true 
  },
  title: title => `${title} - LI App`,
})

router.on('start', () => NProgress.start())
router.on('finish', () => NProgress.done())

