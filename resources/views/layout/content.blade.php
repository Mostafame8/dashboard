@include('layout.header')

<div class="w-full py-5">
    <div class="bg-white rounded-2xl w-full p-3">
        <div class="flex justify-between px-2">
            <div class="flex flex-col">
                <div class="font-medium text-xl text-primary">العائد المادي</div>
                <div class="flex justify-between items-center text-xs">
                    <div class="flex items-center">
                        <div class="rounded-full bg-secondary w-3 h-3"></div>
                        <div class="ms-1">الزيارات</div>
                    </div>
                    <div class="flex items-center ms-3">
                        <div class="rounded-full bg-primary w-3 h-3"></div>
                        <div class="ms-1">المبيعات</div>
                    </div>
                    <div class="flex items-center ms-3">
                        <div class="rounded-full bg-green-400 w-3 h-3"></div>
                        <div class="ms-1">العائد</div>
                    </div>
                </div>
            </div>
            <div>
                <!--Tabs navigation-->
                <ul
                    class="flex list-none flex-row flex-wrap border-b-0 p-1 bg-gray-100 rounded-md"
                    role="tablist"
                    data-twe-nav-ref>
                    <li role="presentation">
                        <a
                            href="#tabs-home"
                            class="block rounded-lg px-4 py-2 text-xs font-medium uppercase leading-tight text-gray-400 hover:isolate hover:text-primary focus:isolate focus:border-transparent data-[twe-nav-active]:bg-white data-[twe-nav-active]:text-primary "
                            data-twe-toggle="pill"
                            data-twe-target="#tabs-home"
                            data-twe-nav-active
                            role="tab"
                            aria-controls="tabs-home"
                            aria-selected="true"
                        >الاسبوع</a>
                    </li>
                    <li role="presentation" class="mx-2">
                        <a
                            href="#tabs-home"
                            class="block rounded-md px-4 py-2 text-xs font-medium uppercase leading-tight text-gray-400 hover:isolate hover:text-primary focus:isolate focus:border-transparent data-[twe-nav-active]:bg-white data-[twe-nav-active]:text-primary "
                            data-twe-toggle="pill"
                            data-twe-target="#tabs-profile"
                            role="tab"
                            aria-controls="tabs-profile"
                            aria-selected="false"
                        >الشهر</a>
                    </li>
                    <li role="presentation">
                        <a
                            href="#tabs-home"
                            class="block rounded-md px-4 py-2 text-xs font-medium uppercase leading-tight text-gray-400 hover:isolate hover:text-primary focus:isolate focus:border-transparent data-[twe-nav-active]:bg-white data-[twe-nav-active]:text-primary "
                            data-twe-toggle="pill"
                            data-twe-target="#tabs-messages"
                            role="tab"
                            aria-controls="tabs-messages"
                            aria-selected="false"
                        >السنة</a>
                    </li>
                </ul>

                <!--Tabs content-->
                <div>
                    <div
                        class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                        id="tabs-home"
                        role="tabpanel"
                        aria-labelledby="tabs-home-tab"
                        data-twe-tab-active>
                    </div>
                    <div
                        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                        id="tabs-profile"
                        role="tabpanel"
                        aria-labelledby="tabs-profile-tab">
                    </div>
                    <div
                        class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[twe-tab-active]:block"
                        id="tabs-messages"
                        role="tabpanel"
                        aria-labelledby="tabs-messages-tab">
                    </div>
                </div>
            </div>
        </div>
        <div id="chart"></div>
    </div>
</div>

<div class="w-full py-5 grid grid-cols-3 xl:grid-cols-4 gap-5">
    <div class="bg-white rounded-2xl w-full p-3 col-span-2 xl:col-span-3">
        <div class="flex justify-between px-2">
            <div class="flex flex-col">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="rounded-sm bg-secondary w-3 h-3"></div>
                        <div class="ms-1">المنتجات الرقمية</div>
                    </div>
                    <div class="flex items-center ms-3">
                        <div class="rounded-sm bg-primary w-3 h-3"></div>
                        <div class="ms-1">الدورات</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="relative" data-twe-dropdown-ref>
                    <button
                        class="flex items-center rounded-2xl bg-primary px-6 pb-2 pt-2.5 text-xs leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none"
                        type="button"
                        id="dropdownMenuButton1"
                        data-twe-dropdown-toggle-ref
                        aria-expanded="false"
                        data-twe-ripple-init
                        data-twe-ripple-color="light">
                        3 ابريل - 28 مايو
                        <span class="ms-2 w-2 [&>svg]:h-5 [&>svg]:w-5">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 20 20"
          fill="currentColor">
        <path
            fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
      </svg>
    </span>
                    </button>
                    <ul
                        class="absolute cursor-pointer z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-base text-primary shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark py-2"
                        aria-labelledby="dropdownMenuButton3"
                        data-twe-dropdown-menu-ref>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-primary hover:bg-gray-200 hover:text-primary focus:bg-gray-200 focus:outline-none focus:text-primary active:bg-gray-200 active:text-primary active:no-underline"
                                data-twe-dropdown-item-ref
                            >مارس</a>
                        </li>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-primary hover:bg-gray-200 hover:text-primary focus:bg-gray-200 focus:outline-none focus:text-primary active:bg-gray-200 active:text-primary active:no-underline"
                                data-twe-dropdown-item-ref
                            >ابريل</a>
                        </li>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-normal text-primary hover:bg-gray-200 hover:text-primary focus:bg-gray-200 focus:outline-none focus:text-primary active:bg-gray-200 active:text-primary active:no-underline"
                                data-twe-dropdown-item-ref
                            >مايو</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="chart_2"></div>
    </div>
    <div class="flex flex-col items-center justify-between">
        <div class="bg-white w-full rounded-2xl px-5 py-7">
            <div class="text-primary flex items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                </div>
                <div class="ms-3">
                    الأعضاء النشطين
                </div>
            </div>
            <div class="flex justify-between items-center mt-3">
                <div class="text-2xl">
                    2,300 عضو
                </div>
                <div class="text-success flex items-center">
                    <div>
                        32%
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ms-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white w-full rounded-2xl px-5 py-7">
            <div class="text-primary flex items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                    </svg>
                </div>
                <div class="ms-3">
                    تابي
                </div>
            </div>
            <div class="flex justify-between items-center mt-3">
                <div class="text-2xl">
                    1,200 ر.س
                </div>
                <div class="text-danger flex items-center">
                    <div>
                        12%
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white w-full rounded-2xl px-5 py-7">
            <div class="text-primary flex items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                    </svg>
                </div>
                <div class="ms-3">
                    بطاقة الائتمان
                </div>
            </div>
            <div class="flex justify-between items-center mt-3">
                <div class="text-2xl">
                    3,000 ر.س
                </div>
                <div class="text-success flex items-center">
                    <div>
                        35%
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ms-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        const options = {
            series: [{
                name: 'الزيارات',
                data: [44, 55, 57, 56, 61, 58 ,44, 55, 57, 56, 61, 58]
            }, {
                name: 'المبيعات',
                data: [76, 85, 101, 98, 87, 105,76, 85, 101, 98, 87, 105]
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['30%'],
                    endingShape: 'rounded',
                    borderRadius: 5,
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: [
                    "ديسمبر",
                    "نوفمبر",
                    "أكتوبر",
                    "سبتمبر",
                    "أغسطس",
                    "يوليو",
                    "يونيو",
                    "مايو",
                    "إبريل",
                    "مارس",
                    "فبراير",
                    "يناير"
                ],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: '#9a9a9a',
                        fontSize: '12px',
                        fontFamily: 'Rubik'

                    }
                },
                opposite:true,

            },
            yaxis: {
                labels: {
                    style: {
                        colors: '#9a9a9a',
                        fontSize: '12px',
                        fontFamily: 'Rubik'

                    }
                },
                opposite: true,
                formatter: function (val) {
                    return val + "ر.س"
                }
            },
            fill: {
                opacity: 1
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px',
                    fontFamily: 'Rubik'
                },
                y: {
                    formatter: function (val) {
                        return val + " " + "ر.س"
                    }
                }
            },
            colors: ['#00C4E4', '#002870', '#4ade80'],
            grid: {
                borderColor: '#d9d9d9',
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };



        const options_2 = {
            series: [{
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 100, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'series2',
                data: [11, 32, 45, 32, 34, 52, 41, 32, 45, 32, 34, 52, 41]
            }],
            chart: {
                height: 350,
                type: 'area',
                toolbar:{
                    show: false
                }
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                categories: [
                    "3 إبريل",
                    "9 إبريل",
                    "13 إبريل",
                    "19 إبريل",
                    "21 إبريل",
                    "27 إبريل",
                    "4 مايو",
                    "12 مايو",
                    "18 مايو",
                    "22 مايو",
                    "24 مايو",
                    "28 مايو"
                ],
                labels: {
                    style: {
                        colors: '#9a9a9a',
                        fontSize: '12px',
                        fontFamily: 'Rubik'
                    }
                },
            },
            yaxis:{
                labels: {
                    style: {
                        colors: '#9a9a9a',
                        fontSize: '12px',
                        fontFamily: 'Rubik'

                    }
                },
            },
            tooltip: {
                style: {
                    fontSize: '12px',
                    fontFamily: 'Rubik'
                },
                y: {
                    formatter: function (val) {
                        return val
                    }
                }
            },
            colors: ['#00C4E4', '#002870', '#4ade80'],
            grid: {
                borderColor: '#d9d9d9',
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };


        const chart = new ApexCharts(document.querySelector('#chart'), options);
        const chart_2 = new ApexCharts(document.querySelector("#chart_2"), options_2);

        chart.render();
        chart_2.render();
    </script>
@endpush
