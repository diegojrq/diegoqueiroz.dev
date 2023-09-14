<template>
  <v-timeline    
    class="v-timeline">
    <v-timeline-item      
      min-width="1"
      class="v-timeline-item"
      v-for="(job, i) in user.job_history"
      :key="i"
      dot-color="green-lighten-1"
      icon="mdi-desktop-classic"
      fill-dot
    >
      <v-card class="v-card">
        <v-card-title class="v-card-title">          
          <div class="job-title">            
            {{ $t("message.hello") }}
            {{ job.translations.find((t) => t.locale === locale).job_title }}
          </div>
          <div class="job-company">
            at {{ job.company_name }}
          </div>          
        </v-card-title>
        <v-card-subtitle class="v-card-subtitle">
          {{ formatDate(job.start_date) }} - {{ formatDate(job.end_date) }} | {{ job.local }}
        </v-card-subtitle>
        <v-card-text class="v-card-text">
          <p>{{ job.translations.find((t) => t.locale === locale).job_description }}</p>
        </v-card-text>
        <v-card-actions
          v-if="job.skills.length > 0">
          <div>
            <v-chip
              v-for="(skill, j) in job.skills"
              :key="j"
              class="ma-2"
              label
              color="green"              
            >
              <v-icon start icon="mdi-laptop"></v-icon>
              {{ skill.name }}
            </v-chip>
          </div>          
        </v-card-actions>
      </v-card>
    </v-timeline-item>
  </v-timeline>
</template>

<script>

import moment from 'moment';
import WelcomeItem from './WelcomeItem.vue'
import { getUser } from '../services/user.service';

export default {
  name: "HelloWorld",
  components: { WelcomeItem },
  mixins: [],
  data() {
    return {
      locale: '',
      user: [],
    }
  },
  created() {

    this.locale = localStorage.getItem('locale') || 'en-us';

    getUser(1).then((response) => {
      this.user = response.data;
    });

  },
  methods: {
    formatDate(date) {
      return moment(String(date)).format('MMM YYYY').toLowerCase();
    }
  }
}

</script>

<style scoped lang="scss">

$primary-color: #147914;

.v-timeline {
  margin-top: 2rem;
  margin-right: 2rem;
  margin-left: 2rem;  
  margin-bottom: 10rem;  
}

.v-card {
  min-width: 100%;
  max-width: 100%;
}

.v-card-title {
  background: $primary-color;
}

.job-title {
  font-size: 1.1rem;
  color: #fff;
  margin-bottom: -12px;
}

.job-company {
  font-size: 0.9rem;
  color: #fff;
  font-weight: normal;
  padding-left: 12px;  
}

.v-card-subtitle {
  font-size: 0.8rem;
  color: $primary-color;
  text-align: right;
  font-weight: bold;
  padding-top: 8px;
  
}

</style>