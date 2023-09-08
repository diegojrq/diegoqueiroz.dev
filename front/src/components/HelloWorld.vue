<template>
  <v-timeline align="center">
    <v-timeline-item
      v-for="(job, i) in user.job_history"
      :key="i"
      dot-color="green-lighten-1"
      icon="mdi-book-variant"
      fill-dot
    >
      <v-card class="v-card">
        <v-card-title class="v-card-title">
          <div class="job-date">
            {{ formatDate(job.start_date) }} - {{ formatDate(job.end_date) }}
          </div>
          <div class="job-title">            
            {{ job.translations.find((t) => t.locale === locale).job_title }}
          </div>
          <div class="job-company">
            at {{ job.company_name }}
          </div>          
        </v-card-title>
        <v-card-text class="v-card-text">
          <p>{{ job.translations.find((t) => t.locale === locale).job_description }}</p>
        </v-card-text>
        <v-card-actions>
          <div
            v-for="(skill, j) in job.skills"
            :key="j"
          >
            {{ skill.name }}
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
      locale: 'en-us',      
      user: [],
    }
  },
  created() {

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

.job-date {  
  width: 32%;
  position: absolute;
  top: 40px;
  right: 12px;
  background: #fff;
  border: 1px solid #fff;
  border-radius: 5px;
  text-align: center;
  color: $primary-color;
  font-size: 0.8rem;  
  font-weight: bold;  
  letter-spacing: normal;
}

.v-card-text {
  margin-top: 14px;
}

.v-card {
  min-width: 100%;
  max-width: 100%;
}

</style>