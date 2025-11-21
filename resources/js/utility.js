import {usePage} from "@inertiajs/vue3";

const locale = function (){
    const page = usePage()
    return {
        trans: page.props.translations,
        local:page.props.locale
    };
}

export {
    locale
}
