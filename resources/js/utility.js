import {usePage} from "@inertiajs/vue3";

const locale = function () {
    const page = usePage()
    return {
        trans: page.props.translations,
        local: page.props.locale
    };
};

const formatDateTime = function (dateStr, format="MM-DD-YYYY hh:mm A") {

    const date = new Date(dateStr);
    if (isNaN(date)) return null; // invalid date

    const hours24 = date.getHours();
    const hours12 = hours24 % 12 || 12;
    const ampm = hours24 >= 12 ? 'PM' : 'AM';

    const map = {
        YYYY: date.getFullYear(),
        YY: String(date.getFullYear()).slice(-2),
        MM: String(date.getMonth() + 1).padStart(2, '0'),
        DD: String(date.getDate()).padStart(2, '0'),
        HH: String(hours24).padStart(2, '0'),  // 24-hour
        hh: String(hours12).padStart(2, '0'),  // 12-hour
        mm: String(date.getMinutes()).padStart(2, '0'),
        ss: String(date.getSeconds()).padStart(2, '0'),
        A: ampm
    };

    return format.replace(/YYYY|YY|MM|DD|HH|hh|mm|ss|A/g, matched => map[matched]);
};


export {
    locale,
    formatDateTime
}
