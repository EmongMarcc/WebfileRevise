<div class="dark:bg-dark-fg bg-light-fg w-full mx-auto border border-mjtheme-theme rounded shadow-lg" x-data="{selected:null, togglepanel:[
  {
  'id':1,
  'title':'Web App Dev /IT  - DUBAIFILM LLC',
  'content': 'October 2017 - Present Ever since I started working on Dubaifilm Production, I could tell that I have really grown so much and yet up until now Im still striving for new things, pushing my limits, breaking through all challenges in life. flames in my heart got the heat flowing to my veins are gettings stronger as time goes by. let me tell you something, never be afraid showing up your skills, present yourself with confidence because you and only you can. I got the Courage to present my very own skills and ended up having this newly beast developed by yours truly. ( Dubaifilm.ae ) I am so grateful for the opportunity and how it ended. with this masterpiece that I have work so much.'},
  {
  'id':2,
  'title':'Web App Developer (Internship)',
  'content': 'NAV Design & Construction January 2017 - March 2017 As I were exploring my web developing skills, NAV challenges us. A group of students from NEUST University to develop a website for their company. little did they know that me and my friend seeks challenges, we started working on HTML, CSS, Javascript, JQuery and PHP on that time framework it was not that popular and we are still new to those things but that didn ot stop us TEAM WORK and we can do this we segregated works (Joshua & Carlo - Graphic Design, Marvin & Anfernee Documents/Testers and Me as a Developer) and with the help of each other. ( NAV-DC.COM ) Were born to the Online world!'},
  {
  'id':3,
  'title':'Inventory Analyst - Vend Ventures Inc.',
  'content': 'Right after I graduated College, I went to Manila for work and help my family for financial problem. Got hired as Inventory Analyst, I was responsible on keeping tracks of all the SKU/Products of the Company. It was hard at first, especially Im on a whole new different environment and no one was there to pass their work to me. It took me some time to handle it myself, I had rough time but I managed and yeah learn through Experience it is. 5 months after and I have got my flight ticket to Dubai. Got a little experience working in this company but it helps me a lot, here in Dubai.'},
  ]
}">
  <ul class="shadow-box">
    <template x-for="tpprof in togglepanel" :key="tpprof">
    <li class="relative border-b border-mjtheme-theme">

      <button type="button" class="w-full px-8 py-6 text-left dark:text-dark-primary text-light-primary" @click="selected !== tpprof.id ? selected = tpprof.id : selected = null">
        <div class="flex items-center justify-between ">
          <span x-text="tpprof.title"></span>
            <span class="ico-plus"></span>
          </div>
            </button>

            <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="foo" x-bind:style="selected == tpprof.id ? 'max-height: ' + $refs.foo.scrollHeight + 'px' : ''">
              <div class="p-6 dark:text-dark-secondary text-light-secondary">
                <p x-text="tpprof.content"></p>
              </div>
            </div>

          </li>
      </template>
            </ul>
      </div>
