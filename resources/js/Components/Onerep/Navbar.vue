<!-- CHAT GPT2 -->
<template>
    <nav class="w-full py-4 bg-background_dark fixed bottom-0">
        <div class="flex justify-evenly">
            <a href="" @click="navigateTo('calendar')" :class="{ 'text-blue-500': activeSection === 'calendar' }">
                <img src="/App_icons/calendar_icon.svg" alt="Calendrier"
                    :class="{ 'transform scale-105': activeSection === 'calendar' }">
            </a>

            <!-- PROGRAM ICON -->
            <a href="/programs/" @click="navigateTo('programs')" :class="{ '': activeSection === 'programs' }">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="23" viewBox="0 0 26 23" fill="none"
                    :class="{ 'transform scale-105': activeSection === 'programs', }">
                    <path :class="{ 'fill-white': activeSection !== 'programs' }" fill-rule="evenodd" clip-rule="evenodd"
                        d="M1.66961 8.90022C2.07616 8.6655 2.59601 8.80479 2.83073 9.21134L9.83073 21.3357C10.0655 21.7422 9.92616 22.2621 9.51961 22.4968C9.11306 22.7315 8.59321 22.5922 8.35849 22.1857L1.35849 10.0613C1.12377 9.65479 1.26306 9.13494 1.66961 8.90022ZM18.9693 9.32373L7.44471 15.9775L6.59471 14.5052L18.1193 7.85149L18.9693 9.32373ZM2.0905 12.9103C1.85578 12.5038 1.33592 12.3645 0.929375 12.5992C0.522826 12.8339 0.383532 13.3538 0.618253 13.7603L4.78492 20.9772C5.01964 21.3837 5.53949 21.523 5.94604 21.2883C6.35259 21.0536 6.49189 20.5337 6.25716 20.1272L2.0905 12.9103ZM0.658379 16.6037C1.06493 16.369 1.58478 16.5083 1.8195 16.9148L2.65283 18.3582C2.88755 18.7648 2.74826 19.2846 2.34171 19.5193C1.93516 19.754 1.41531 19.6148 1.18059 19.2082L0.347257 17.7648C0.112536 17.3583 0.25183 16.8384 0.658379 16.6037ZM17.1593 0.93874C16.9246 0.532191 16.4048 0.392897 15.9982 0.627618C15.5917 0.86234 15.4524 1.38219 15.6871 1.78874L22.6871 13.9131C22.9218 14.3196 23.4417 14.4589 23.8482 14.2242C24.2548 13.9895 24.3941 13.4696 24.1593 13.0631L17.1593 0.93874ZM19.571 1.83553C19.9775 1.60081 20.4974 1.74011 20.7321 2.14666L24.8988 9.36354C25.1335 9.77009 24.9942 10.2899 24.5876 10.5247C24.1811 10.7594 23.6612 10.6201 23.4265 10.2135L19.2599 2.99666C19.0251 2.59011 19.1644 2.07026 19.571 1.83553ZM24.3361 3.91436C24.1014 3.50781 23.5815 3.36852 23.175 3.60324C22.7684 3.83796 22.6291 4.35781 22.8639 4.76436L23.6972 6.20773C23.9319 6.61428 24.4518 6.75357 24.8583 6.51885C25.2649 6.28413 25.4042 5.76428 25.1694 5.35773L24.3361 3.91436Z"
                        fill="url(#paint0_linear_30_412)" />
                    <defs>
                        <linearGradient id="paint0_linear_30_412" x1="29.0004" y1="-6.99997" x2="36.0459" y2="0.853108"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#3988FF" />
                            <stop offset="1" stop-color="#90DDF0" />
                        </linearGradient>
                    </defs>
                </svg>

                <!-- PROGRAM ICON UNDERLINE -->
                <div v-if="activeSection === 'programs'"
                    class="h-[2px] bg-gradient-to-r from-main_blue to-light_blue rounded w-[95%] ml-auto mt-[2px]"></div>
            </a>


            <!-- HOME ICON -->
            <a href="/" @click="navigateTo('/')" :class="{ '': activeSection === 'home' }" class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none"
                    :class="{ 'transform scale-105': activeSection === 'home', }">
                    <path :class="{ 'fill-white': activeSection !== 'home' }" fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.2628 0.162671C11.1017 0.062964 10.898 0.0629637 10.7368 0.162671L0.371147 6.57474C-0.0570949 6.83965 0.130629 7.49996 0.634183 7.49996H1.99981V11L1.99981 11.0014V19C1.99981 19.5522 2.44753 20 2.99981 20H7.99981C8.5521 20 8.99981 19.5522 8.99981 19V12H12.9998V19C12.9998 19.5522 13.4475 20 13.9998 20H18.9998C19.5521 20 19.9998 19.5522 19.9998 19V11V8.99996V7.49996H21.3654C21.869 7.49996 22.0567 6.83965 21.6285 6.57474L11.2628 0.162671Z"
                        fill="url(#paint0_linear_131_1278)" />
                    <defs>
                        <linearGradient id="paint0_linear_131_1278" x1="28" y1="-11.5" x2="36.2173" y2="-5.50404"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#3988FF" />
                            <stop offset="1" stop-color="#90DDF0" />
                        </linearGradient>
                    </defs>
                </svg>
                <!-- HOME ICON UNDERLINE -->
                <div v-if="activeSection === 'home'"
                    class="h-[2px] bg-gradient-to-r from-main_blue to-light_blue rounded w-[95%] ml-auto mt-[2px] absolute left-0 bottom-0">
                </div>
            </a>

            <!-- STATS ICON -->
            <a href="/stats/" @click="navigateTo('stats')" :class="{ '': activeSection === 'stats' }" class="relative">
                <!-- Icon SVG -->
                <!-- Si section active alors rien
                Si section inactive alors stroke blanc -->
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="22" viewBox="0 0 25 22" fill="none"
                    :class="{ 'transform scale-105': activeSection === 'stats', }">
                    <path :class="{ 'fill-white': activeSection !== 'stats' }" fill-rule="evenodd" clip-rule="evenodd"
                        d="M1 22H1.00293H24C24.5523 22 25 21.5523 25 21C25 20.4477 24.5523 20 24 20H2.00293V1C2.00293 0.447714 1.55521 0 1.00293 0C0.450645 0 0.00292969 0.447714 0.00292969 1V20.9229C0.000988483 20.9483 0 20.9741 0 21C0 21.5523 0.447715 22 1 22ZM4.16245 16.4123C3.7991 16.8282 3.86774 17.4272 4.31575 17.7502C4.76377 18.0732 5.4215 17.9978 5.78485 17.5819L10.7328 11.9178L15.028 11.6477C15.1944 11.6373 15.3516 11.5884 15.4903 11.5105C15.6462 11.4652 15.7934 11.3794 15.9165 11.2529L21.9657 5.03308C22.3508 4.63717 22.353 3.99315 21.9706 3.59464C21.5882 3.19612 20.9661 3.194 20.5811 3.58992L14.635 9.70362L10.1918 9.98304C9.83711 10.0053 9.52476 10.202 9.3434 10.4815L4.16245 16.4123Z"
                        fill="url(#paint0_linear_30_748)" />
                    <defs>
                        <linearGradient id="paint0_linear_30_748" x1="38.3064" y1="-9.54716" x2="45.5975" y2="-2.30411"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#3988FF" />
                            <stop offset="1" stop-color="#90DDF0" />
                        </linearGradient>
                    </defs>
                </svg>
                <!-- STATS ICON UNDERLINE -->
                <div v-if="activeSection === 'stats'"
                    class="h-[2px] bg-gradient-to-r from-main_blue to-light_blue rounded w-[95%] ml-auto mt-[2px]">
                </div>
            </a>




        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            activeSection: '', // Initialisez la section active avec une chaîne vide
        };
    },
    created() {
        // Récupérer la section active à partir de l'URL actuelle
        this.activeSection = this.getCurrentSection();
    },
    methods: {
        navigateTo(section) {
            this.activeSection = section;
        },
        getCurrentSection() {
            // Obtenir la partie de l'URL après le dernier '/'
            const currentSection = window.location.pathname.split('/').pop();
            return currentSection || 'home'; // Retourner 'home' si l'URL est '/' (page d'accueil)
        },
    },
};
</script>




<!-- V1 OK -->
<!-- <template>
    <nav class="w-full py-4 bg-red-700">
        <div class="flex justify-evenly">
            <a  href=""><img src="/App_icons/calendar_icon.svg" class="active:scale-105"></a>

            <a href="/trainings/" @click="setActiveSection('trainings')" :class="{'active': activeSection === 'trainings'}">
                <img src="/App_icons/barbell_icon.svg" class="active:scale-105 active:bg-orange-700 ">
              </a>
            <a href="/"><img src="/App_icons/home_icon.svg" class="active:scale-105"></a>
            <a href="/stats"><img src="/App_icons/stats_icon.svg" class="active:scale-105"></a>
        </div>
    </nav>
</template>

<script>
export default {
  data() {
    return {
      activeSection: '', // Initialisez la section active avec une chaîne vide
    };
  },
  methods: {
    setActiveSection(section) {
      this.activeSection = section;
    },
  },
};
</script> -->


<!-- CHAT GPT 1 -->
<!-- <template>
    <nav class="w-full py-4 bg-red-700">
      <div class="flex justify-evenly">
        <a @click="setActiveSection('calendrier')" :class="{'active': activeSection === 'calendrier'}">
          <img src="/App_icons/calendar_icon.svg" class="active:scale-105">
        </a>
        <a @click="setActiveSection('entrainements')" :class="{'active': activeSection === 'entrainements'}">
          <img src="/App_icons/barbell_icon.svg" class="active:scale-105">
        </a>
        <a @click="setActiveSection('accueil')" :class="{'active': activeSection === 'accueil'}">
          <img src="/App_icons/home_icon.svg" class="active:scale-105">
        </a>
        <a @click="setActiveSection('statistiques')" :class="{'active': activeSection === 'statistiques'}">
          <img src="/App_icons/stats_icon.svg" class="active:scale-105">
        </a>
      </div>
    </nav>
  </template>

  <script>
  export default {
    data() {
      return {
        activeSection: '', // Initialisez la section active avec une chaîne vide
      };
    },
    methods: {
      setActiveSection(section) {
        this.activeSection = section;
      },
    },
  };
  </script>

  <style>
  /* Définissez le style pour l'icône active */
  .active img {
    transform: scale(1.05); /* Par exemple, agrandir l'icône active */
  }
  </style> -->
