<?php
// Service Culture Learning Hub - Topics dataset
$TOPICS = [
  1 => [
    'title' => 'Self-Awareness and Self-Regulation',
    'category' => 'Personal Leadership',
    'icon' => 'fa-brain',
    'image' => 'https://images.unsplash.com/photo-1499209974431-9dddcece7f88?w=1200&q=80',
    'image_alt' => 'Person reflecting in front of a mirror representing self-awareness',
    'intro' => 'This module introduces personal leadership and competence. It discusses self-awareness and self-regulation as foundations for leadership realization, helping students explore values and the demands for success.',
    'objectives' => [
      'Explain the importance of self-awareness and self-regulation.',
      'Discuss how practicing self-awareness and self-regulation helps demonstrate leadership capacity.',
      'Analyze situations where self-awareness and self-regulation play a significant role in leadership.',
      'Resolve to practice self-awareness and self-regulation to further develop leadership capacity.'
    ],
    'concepts' => [
      'In the modern workplace, technical skills now take second place to an employee\'s ability to learn on the job.',
      'Communication skills, adaptability, creativity, responsiveness, personal management, motivation, contributorship, social skills, and leadership potential are desirable traits.',
      'Self-awareness is the ability to recognize one\'s place and role in the world and express thoughts and behaviors based on that understanding.',
      'Self-regulation is the ability to manage emotions, behavior, and responses in different situations.'
    ],
    'visual' => 'Self-awareness is the inner mirror; self-regulation is the steering wheel. Together, they keep your leadership journey on the road.',
    'example' => 'In an IT-BPM contact center, a customer service representative receives a frustrated caller. A self-aware agent notices their own rising stress; a self-regulated agent breathes, lowers their tone, and de-escalates the conversation calmly.',
    'activity' => [
      'title' => 'Emotion Regulation Mini Activity',
      'prompt' => 'Think of a recent moment when you felt frustrated. Write down (1) the trigger, (2) your first reaction, and (3) a more regulated response you could have given.'
    ],
    'reflection' => 'Which area do you need to strengthen more right now: self-awareness or self-regulation? Why?',
    'terms' => [
      ['Self-Awareness','Understanding your own emotions, behavior, and role.','fa-eye'],
      ['Self-Regulation','Controlling emotions and reactions appropriately.','fa-sliders'],
      ['Leadership Capacity','Ability to lead and influence others effectively.','fa-user-tie'],
      ['Adaptability','Ability to adjust to changes and situations.','fa-shuffle'],
      ['Personal Management','Managing your time, energy, and priorities.','fa-list-check'],
      ['Responsiveness','Reacting quickly and appropriately to needs.','fa-bolt'],
      ['Contributorship','Willingness to add value to a team or task.','fa-hands-helping']
    ],
    'quiz' => [
      ['Self-awareness is best described as:',['Knowing your own emotions and role','Memorizing job duties','Avoiding feedback','Working in silence'],0],
      ['Self-regulation helps a leader to:',['Ignore emotions','Manage reactions in difficult situations','Blame others','React impulsively'],1],
      ['In modern workplaces, technical skills are now:',['More important than soft skills','Second to ability to learn on the job','Not needed','Replaced by AI only'],1],
      ['Which is NOT a desirable workplace trait listed?',['Adaptability','Creativity','Gossiping','Motivation'],2]
    ]
  ],
  2 => [
    'title' => 'Motivation',
    'category' => 'Personal Leadership',
    'icon' => 'fa-fire',
    'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=1200&q=80',
    'image_alt' => 'Team motivated and working together at a desk',
    'intro' => 'Motivation is a set of conditions that prompt change and help individuals keep going toward expected or desired goals. This module builds the desire to meet the demands and requirements for success.',
    'objectives' => [
      'Explain why motivation is a key component of leadership.',
      'Evaluate one\'s personal motivation.',
      'Determine how to improve current motivation to develop competent leadership.'
    ],
    'concepts' => [
      'Motivation is a basic system that prompts people to keep going toward expected or aspired ends.',
      'Motivation theories include Two-Factor Theory, Goal-Setting, Drive, and Acquired Needs.',
      'Intrinsic motivation means doing something because it is enjoyable or personally meaningful.',
      'Extrinsic motivation means doing something for rewards, grades, recognition, or avoiding consequences.'
    ],
    'visual' => 'Picture motivation as fuel: intrinsic fuel burns slow and steady; extrinsic fuel burns bright and fast. Great leaders learn to mix both.',
    'example' => 'A BPO trainee studies hard for a certification because they love learning (intrinsic) AND because it leads to a promotion and bonus (extrinsic).',
    'activity' => [
      'title' => 'Goal-Setting Activity',
      'prompt' => 'Write one SMART goal (Specific, Measurable, Achievable, Relevant, Time-bound) you can accomplish this month.'
    ],
    'reflection' => 'What truly motivates you to show up every day — purpose, people, progress, or pay?',
    'terms' => [
      ['Intrinsic Motivation','Doing something because you enjoy it.','fa-heart'],
      ['Extrinsic Motivation','Doing something for rewards or recognition.','fa-trophy'],
      ['Goal-Setting','Creating objectives to guide actions.','fa-bullseye'],
      ['Drive','Internal force that pushes a person to act.','fa-gauge-high'],
      ['Two-Factor Theory','Herzberg\'s theory of hygiene factors and motivators.','fa-scale-balanced'],
      ['Acquired Needs','Needs developed through life experience (achievement, affiliation, power).','fa-seedling']
    ],
    'quiz' => [
      ['Intrinsic motivation comes from:',['Bonuses','Personal enjoyment or meaning','Punishment','Peer pressure'],1],
      ['Which is an example of extrinsic motivation?',['Loving your craft','Earning a bonus','Being curious','Helping for free'],1],
      ['Motivation theories mentioned include all EXCEPT:',['Two-Factor','Goal-Setting','Acquired Needs','Color Theory'],3]
    ]
  ],
  3 => [
    'title' => 'Personal Vision and Mission',
    'category' => 'Personal Leadership',
    'icon' => 'fa-compass',
    'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1200&q=80',
    'image_alt' => 'Notebook with vision and mission planning',
    'intro' => 'This module provides exposure to leadership orientation. Students reflect on what they have learned, what they want to achieve, and how to take ownership of personal development.',
    'objectives' => [
      'Synthesize learning about self-awareness, self-regulation, and motivation.',
      'Discover how these define an individual\'s value system.',
      'Discuss how concrete mission and vision translate to performance results.',
      'Compose a personal mission and vision statement.'
    ],
    'concepts' => [
      'A mission defines your purpose.',
      'A vision extends your mission to an ideal future state.',
      'Self-determination refers to endorsing one\'s actions at a high level of reflection and experiencing a sense of freedom.',
      'Values help people become more self-aware, make ethical decisions, prioritize tasks, and develop credibility as a leader.'
    ],
    'visual' => 'Mission is the road you walk today. Vision is the horizon you walk toward. Values are the compass keeping you on course.',
    'example' => 'A team leader writes: "My mission is to develop confident communicators. My vision is a workplace where every agent feels heard and valued."',
    'activity' => [
      'title' => 'Mission & Vision Builder',
      'prompt' => 'Use the builder below to compose your personal mission and vision. It will save to your browser automatically.'
    ],
    'reflection' => 'If your future self read your mission today, would they be proud of the direction?',
    'terms' => [
      ['Mission','A person\'s purpose or reason for doing something.','fa-flag'],
      ['Vision','The ideal future a person wants to achieve.','fa-binoculars'],
      ['Self-Determination','Ability to make personal choices independently.','fa-person-walking'],
      ['Values','Beliefs and principles that guide decisions.','fa-gem'],
      ['Credibility','Trust earned through consistent ethical action.','fa-certificate']
    ],
    'quiz' => [
      ['A mission statement defines your:',['Future dream','Purpose','Hobbies','Salary'],1],
      ['A vision statement points to your:',['Past','Ideal future','Daily tasks','Weakness'],1],
      ['Values help leaders to:',['Avoid decisions','Make ethical decisions','Hide motives','Skip planning'],1]
    ]
  ],
  4 => [
    'title' => 'Empathy',
    'category' => 'Social Competence',
    'icon' => 'fa-hand-holding-heart',
    'image' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1200&q=80',
    'image_alt' => 'Two people in conversation showing empathy',
    'intro' => 'This module guides students in developing empathy as a critical social competency required of a developing leader. Empathy is important in understanding people and managing conflict.',
    'objectives' => [
      'Discuss how empathy is applied as a social competency.',
      'Explain why empathy is an important skill for leaders to develop.',
      'Analyze situations that benefit from empathy.',
      'Develop and apply empathy.'
    ],
    'concepts' => [
      'Empathy is the feeling that you understand and share another person\'s experiences and emotions.',
      'Empathy is the capacity to recognize and share feelings experienced by another person.',
      'Empathy means placing oneself in another person\'s shoes and seeing through someone else\'s eyes.',
      'Empathy is a critical social skill and has great use in conflict management.',
      'An empathetic person engaged in conflict management may sense how other people feel.'
    ],
    'visual' => 'Empathy is not agreeing — it is understanding. It opens a door before words even enter the room.',
    'example' => 'When an angry customer says, "I\'ve been on hold for 30 minutes!" an empathetic agent replies, "I understand your time matters. Thank you for staying. Let me make this right."',
    'activity' => [
      'title' => 'Choose the Empathetic Response',
      'prompt' => 'For each scenario shown below, click the most empathetic reply.'
    ],
    'reflection' => 'When was the last time someone showed you empathy? How did it change the moment?',
    'terms' => [
      ['Empathy','Understanding and sharing another person\'s feelings.','fa-heart'],
      ['Conflict Management','Handling disagreements peacefully.','fa-handshake'],
      ['Social Competency','Ability to interact effectively with others.','fa-people-group'],
      ['Active Listening','Fully focusing on the speaker to understand them.','fa-ear-listen'],
      ['Perspective Taking','Seeing a situation from another person\'s viewpoint.','fa-eye']
    ],
    'quiz' => [
      ['Empathy means:',['Pity','Understanding and sharing another\'s feelings','Ignoring others','Always agreeing'],1],
      ['Empathy is especially useful in:',['Spreadsheets','Conflict management','Filing','Typing'],1],
      ['Empathy is described as a critical _____ skill.',['Technical','Social','Software','Physical'],1]
    ]
  ],
  5 => [
    'title' => 'Social Skills',
    'category' => 'Social Competence',
    'icon' => 'fa-people-arrows',
    'image' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=1200&q=80',
    'image_alt' => 'Diverse team collaborating in an office',
    'intro' => 'This module provides guidelines on developing social skills, emphasizing holistic development and a personal brand of leadership.',
    'objectives' => [
      'Discuss social skills as a component of social competence.',
      'Explain the importance of developing solid social skills.'
    ],
    'concepts' => [
      'Social skills are connected to social competence.',
      'Soft skills are attributes that enhance how people relate with others — also called people skills or emotional intelligence.',
      'Soft skills are learned or intrinsically developed to survive in social settings.',
      'Soft skills are critical competencies that make businesses more profitable and workplaces better.',
      'Hard skills are technical or measurable abilities.'
    ],
    'visual' => 'Hard skills get you hired. Soft skills get you promoted.',
    'example' => 'A new hire who can code well but cannot collaborate is less valuable than one who codes decently AND communicates clearly with the team.',
    'activity' => [
      'title' => 'Soft vs. Hard Skills Sort',
      'prompt' => 'Click each skill card to flip it and reveal whether it is a SOFT or HARD skill.'
    ],
    'reflection' => 'Which one soft skill, if doubled, would change your career the most?',
    'terms' => [
      ['Soft Skills','Personal and social abilities used in communication and teamwork.','fa-comments'],
      ['Hard Skills','Technical or measurable abilities.','fa-screwdriver-wrench'],
      ['Emotional Intelligence','Ability to understand and manage emotions.','fa-brain'],
      ['Social Competence','Effectiveness in social interactions.','fa-users'],
      ['People Skills','Skills that improve relationships with others.','fa-handshake']
    ],
    'quiz' => [
      ['Soft skills are also called:',['Hard skills','People skills','Math skills','Tech skills'],1],
      ['Hard skills are:',['Emotional','Technical and measurable','Hidden','Random'],1],
      ['Social skills are connected to:',['Coding','Social competence','Hardware','Inventory'],1]
    ]
  ],
  6 => [
    'title' => 'Coaching Sessions as Learning Opportunities',
    'category' => 'Workplace Growth',
    'icon' => 'fa-chalkboard-user',
    'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=1200&q=80',
    'image_alt' => 'Coach mentoring an employee at work',
    'intro' => 'Coaching sessions are learning opportunities in organizations where leadership is a priority. Coaching provides room for sharing best practices and brainstorming toward personal growth.',
    'objectives' => [
      'Define coaching.',
      'Define coaching session.',
      'Outline and describe key steps in the coaching cycle.',
      'List the benefits of coaching sessions.'
    ],
    'concepts' => [
      'Coaching provides people with tools, knowledge, and opportunities to fully develop and become effective.',
      'Coaching is a designed alliance focused on developing an individual to become their best self.',
      'Coaching sessions help employees learn from mistakes and improve performance.',
      'Supervisor scenarios include rude responses to customers, incorrect information, repeated mistakes, slow work, and tardiness affecting service flow.'
    ],
    'visual' => 'Coaching cycle: Observe → Discuss → Agree → Practice → Follow up.',
    'example' => 'After a difficult call, the team lead pulls the agent aside, listens to the recording together, asks open questions, and agrees on one specific behavior to try tomorrow.',
    'activity' => [
      'title' => 'Coaching Conversation Builder',
      'prompt' => 'Pick the best coaching response to a struggling teammate from the options below.'
    ],
    'reflection' => 'Who in your life has coached you well? What did they do that worked?',
    'terms' => [
      ['Coaching','Helping someone improve performance and skills.','fa-chalkboard-user'],
      ['Feedback','Information given to improve performance.','fa-comment-dots'],
      ['Brainstorming','Sharing ideas to solve problems.','fa-lightbulb'],
      ['Coaching Cycle','Repeating steps that develop a person over time.','fa-arrows-rotate'],
      ['Designed Alliance','Mutual agreement on how coach and learner will work.','fa-handshake'],
      ['Performance','Quality and quantity of work delivered.','fa-chart-line']
    ],
    'quiz' => [
      ['Coaching is best described as a:',['One-time talk','Designed alliance for development','Punishment','Promotion ceremony'],1],
      ['Coaching sessions help employees:',['Avoid mistakes only','Learn from mistakes and improve','Skip work','Replace managers'],1]
    ]
  ],
  7 => [
    'title' => 'Competencies Valued in the IT-BPM Industry',
    'category' => 'IT-BPM Workplace',
    'icon' => 'fa-headset',
    'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?w=1200&q=80',
    'image_alt' => 'BPO call center agents at work',
    'intro' => 'This module explains what competencies are and identifies the competencies valued in the IT-BPM industry.',
    'objectives' => [
      'Define competency.',
      'List competencies valued in the IT-BPM industry.',
      'Explain how each competency is applied in the industry.',
      'Find ways to develop these competencies.'
    ],
    'concepts' => [
      'Competency is the ability of an individual to do a job fully according to set expectations.',
      'The IT-BPM industry includes diverse roles requiring specific knowledge, skills, and behaviors.',
      'Core competencies: Cognitive Ability, English Proficiency, Computer Literacy, Perceptual Speed and Accuracy, Communication, Learning Orientation, Courtesy, Empathy, Reliability, Responsiveness.'
    ],
    'visual' => 'A radar chart of competencies shows your strongest and weakest sides — work on both.',
    'example' => 'A technical support agent uses Cognitive Ability to troubleshoot, English Proficiency to explain clearly, Empathy to comfort the user, and Reliability to follow through.',
    'activity' => [
      'title' => 'Self-Assessment Radar',
      'prompt' => 'Rate yourself 1–5 on each core competency. The radar chart updates live.'
    ],
    'reflection' => 'Which two competencies will you intentionally grow this semester?',
    'terms' => [
      ['Competency','Ability to do a job according to set expectations.','fa-medal'],
      ['Cognitive Ability','Capability to think and solve problems.','fa-brain'],
      ['English Proficiency','Ability to communicate effectively in English.','fa-language'],
      ['Computer Literacy','Skill in using computers and software.','fa-computer'],
      ['Perceptual Speed','Quickly noticing details accurately.','fa-bolt'],
      ['Learning Orientation','Eagerness to keep learning.','fa-book-open'],
      ['Courtesy','Polite and respectful behavior.','fa-hand-sparkles'],
      ['Reliability','Being dependable and consistent.','fa-shield'],
      ['Responsiveness','Reacting quickly and appropriately.','fa-bell']
    ],
    'quiz' => [
      ['Competency means:',['Job title','Ability to do a job to expectations','Salary','Office location'],1],
      ['Which is NOT a listed IT-BPM competency?',['Empathy','Reliability','Cooking','Responsiveness'],2],
      ['Perceptual speed and accuracy means:',['Typing fast only','Quickly noticing details correctly','Driving fast','Skipping QA'],1]
    ]
  ],
  8 => [
    'title' => 'Taking Charge of Your Learning and Development',
    'category' => 'Career Growth',
    'icon' => 'fa-graduation-cap',
    'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=1200&q=80',
    'image_alt' => 'Student studying online for professional development',
    'intro' => 'Learning and development continue beyond college. Learning does not stop in school; it is continuous as students enter the IT-BPM industry.',
    'objectives' => [
      'Define learning and development.',
      'Explain the importance of professional learning and development.',
      'Identify different ways to have a sustainable professional career.'
    ],
    'concepts' => [
      'Learning in college is a ticket to a new chapter in life.',
      'Learning does not stop in school; it is continuous and has no deadline.',
      'Professional life will include challenging situations.',
      'Stop and think before taking proper action.',
      'Continuous learning helps build a sustainable professional career.'
    ],
    'visual' => 'Career growth is a staircase, not an elevator. Each step is a new skill.',
    'example' => 'An agent takes a free online course in Excel each month. Two years later, they are leading reporting for the entire team.',
    'activity' => [
      'title' => 'Learning Goals Tracker',
      'prompt' => 'Add three learning goals. Mark them complete as you progress — saved to your browser.'
    ],
    'reflection' => 'What new skill, if you started today, would change your future the most?',
    'terms' => [
      ['Lifelong Learning','Continuous learning throughout life.','fa-infinity'],
      ['Professional Development','Improving skills for career growth.','fa-arrow-trend-up'],
      ['Sustainable Career','Long-term career growth and stability.','fa-leaf'],
      ['Upskilling','Learning new skills to do your job better.','fa-arrow-up'],
      ['Reskilling','Learning skills for a new role or field.','fa-arrows-rotate']
    ],
    'quiz' => [
      ['Learning is described as:',['One-time event','Continuous','Optional','Only in college'],1],
      ['Sustainable career means:',['Short term','Long-term growth and stability','High risk','No learning'],1]
    ]
  ],
  9 => [
    'title' => 'American Service Expectations',
    'category' => 'Cultural Service',
    'icon' => 'fa-flag-usa',
    'image' => 'https://images.unsplash.com/photo-1485738422979-f5c462d49f74?w=1200&q=80',
    'image_alt' => 'American business professionals shaking hands',
    'intro' => 'This module discusses service expectations of customers in the North American region and encourages cultural sensitivity, diversity, and competence.',
    'objectives' => [
      'Understand service expectations of customers in the North American region.',
      'Discuss best practices when dealing with North American customers.'
    ],
    'concepts' => [
      'Customer service must be viewed from a culturally sensitive perspective.',
      'Diversity refers to characteristics people have little or no control over.',
      'Enablers encourage involvement and commitment toward cultural sensitivity.',
      'Barriers prevent positive changes and can lead to difficult situations.',
      'North American customers often value directness, efficiency, professionalism, clarity, and timely responses.'
    ],
    'visual' => 'American service in one phrase: "Be clear, be quick, be respectful."',
    'example' => 'A US customer asks for a refund. The agent confirms the policy directly, processes it in minutes, and emails confirmation immediately — efficiency wins trust.',
    'activity' => [
      'title' => 'Direct Communication Drill',
      'prompt' => 'Choose the most direct, efficient response in each scenario.'
    ],
    'reflection' => 'How can you communicate clearly without sounding cold?',
    'terms' => [
      ['Cultural Sensitivity','Respecting cultural differences.','fa-globe'],
      ['Diversity','Presence of different cultures and backgrounds.','fa-people-group'],
      ['Enablers','Factors that support positive cultural change.','fa-thumbs-up'],
      ['Barriers','Factors that prevent positive change.','fa-ban'],
      ['Directness','Clear, straightforward communication.','fa-arrow-right'],
      ['Efficiency','Doing things with minimum waste of time.','fa-bolt'],
      ['Professionalism','Behaving responsibly and respectfully at work.','fa-user-tie']
    ],
    'quiz' => [
      ['North American customers value:',['Vagueness','Directness and efficiency','Long delays','Indirect hints'],1],
      ['Enablers in cultural sensitivity are:',['Blockers','Supportive factors','Punishments','Random events'],1]
    ]
  ],
  10 => [
    'title' => 'European Service Expectations',
    'category' => 'Cultural Service',
    'icon' => 'fa-earth-europe',
    'image' => 'https://images.unsplash.com/photo-1493780474015-ba834fd0ce2f?w=1200&q=80',
    'image_alt' => 'European city street with professional setting',
    'intro' => 'This module discusses service expectations of customers in the European region, emphasizing cultural sensitivity, diversity, and competence.',
    'objectives' => [
      'Understand service expectations of customers in the European region.',
      'Discuss best practices when dealing with European customers.'
    ],
    'concepts' => [
      'Customer service should consider cultural sensitivity.',
      'Diversity includes respect for different cultures and intercultural realities.',
      'Diversity also involves traits over which individuals may have little control.',
      'Factors of diversity can enable or hinder service operations.',
      'European customers often value professionalism, privacy, clarity, quality, respect, accuracy, and cultural awareness.'
    ],
    'visual' => 'European service in one phrase: "Be precise, be private, be professional."',
    'example' => 'A German client asks about data handling. The agent responds with specific GDPR-aligned details, never oversells, and respects privacy boundaries.',
    'activity' => [
      'title' => 'Privacy & Professionalism Scenarios',
      'prompt' => 'Pick the most professional and privacy-respecting response.'
    ],
    'reflection' => 'How does respecting privacy show respect for the person?',
    'terms' => [
      ['Privacy','Right to control one\'s personal information.','fa-lock'],
      ['Quality','Standard of excellence in service.','fa-star'],
      ['Accuracy','Correctness of information given.','fa-bullseye'],
      ['Cultural Awareness','Knowledge of cultural differences.','fa-globe-europe'],
      ['Intercultural','Across or between different cultures.','fa-arrows-left-right'],
      ['Professionalism','Behaving responsibly and respectfully at work.','fa-user-tie']
    ],
    'quiz' => [
      ['European customers especially value:',['Speed only','Privacy and professionalism','Casualness','Vague answers'],1],
      ['Diversity factors can:',['Only block','Enable or hinder service','Be ignored','Replace skills'],1]
    ]
  ],
  11 => [
    'title' => 'Asian Service Expectations',
    'category' => 'Cultural Service',
    'icon' => 'fa-earth-asia',
    'image' => 'https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=1200&q=80',
    'image_alt' => 'Asian cityscape representing Asian customer service context',
    'intro' => 'This module discusses service expectations of customers in the Asian region, focusing on cultural diversity, competence, and sensitivity.',
    'objectives' => [
      'Understand service expectations of customers in the Asian region.',
      'Discuss best practices when dealing with Asian customers.'
    ],
    'concepts' => [
      'Customer service must be culturally sensitive.',
      'Diversity means having many different forms, types, and ideas.',
      'Diversity includes people from different races, cultures, religions, and traditions interacting together.',
      'Enablers are "do" factors that support cultural sensitivity and success.',
      'Barriers are "do not" factors that prevent positive changes.',
      'Asian customers often value respect, patience, relationship-building, politeness, harmony, indirect communication, and careful handling of concerns.'
    ],
    'visual' => 'Asian service in one phrase: "Be polite, be patient, preserve harmony."',
    'example' => 'A Japanese client raises a small concern. Instead of contradicting, the agent thanks them, asks gently for more detail, and offers options — preserving face and harmony.',
    'activity' => [
      'title' => 'Polite Response Simulator',
      'prompt' => 'Choose the most polite and harmony-preserving reply.'
    ],
    'reflection' => 'When has patience helped you more than speed?',
    'terms' => [
      ['Respect','Treating others with high regard.','fa-hands-praying'],
      ['Patience','Calmly waiting or enduring.','fa-hourglass-half'],
      ['Harmony','Peaceful agreement among people.','fa-dove'],
      ['Indirect Communication','Conveying messages gently or implicitly.','fa-route'],
      ['Relationship-Building','Creating long-term trust with people.','fa-link'],
      ['Cultural Competency','Ability to interact effectively with different cultures.','fa-globe-asia'],
      ['Enablers','"Do" factors that help cultural sensitivity.','fa-circle-check'],
      ['Barriers','"Do not" factors that hinder change.','fa-circle-xmark']
    ],
    'quiz' => [
      ['Asian customers often value:',['Bluntness','Respect, patience, harmony','Speed over manners','Confrontation'],1],
      ['"Enablers" are:',['Do-not factors','Do factors supporting sensitivity','Random events','Software tools'],1]
    ]
  ],
];
