# yu-4-advanced-frameworks-Gladyshaelters
Deep Dive into Laravel Project.


I would like to build a Health/medical related (closed) social platform 
for patient, its family/friends and medical staff.

Idea layout for the moment,
    -The home landing page, 
    pure grafic plus short explanation where it's clear what this app/site is for.

    -menu with 
        -About: full info of app/page
        -contact page for questions, bugs, suggestions,
        -sign up to make an account
        -options to be
            -patient
            -family
            -medical
        -log in to get acces to platform
    -once logged-in extra menu options,
         -profile of the patient / medicalstaff / family-friend
        -stats page of the patient (like progress, medical news, milestones, health stats)
        -news feed of updates
        -input options for like blogposts or a journal for the patient, family, staff to put in
        -upload pictures 
        -give support, give a mental boost, uplifting sticker, ...

Database:
    -The way i want it to work is  the patient has the 'master' profile,
        the health staff and family profiles don't have there own feed,
        but post and read authorisation on the patients profile.
        So the staf and family/friends, should be linked to the patients profile.
        and only that patients profile. so medical rights and privacy to the patient is respected.







## The Mission
Our goal is to build a system to manage bigger amounts of data.
What kind of data? Well, you can certainly have a say about that!

Some suggestions of what your webapp could do:
- Keep track of everything you read (or watch)
- Manage memberships for your local sports team
- List things you want to sell or give away

### 🌱 Must have features

> These requirements are a bit more technical, to give you freedom in deciding what exact features you want to implement

- A routing system
*DONE
- Best practises for PHP (PSR12, readable code, ...)
*WIP
- A well written git history (if you get famous one day, it needs to be enough to be included in your biography)
*DONE (or at least trying to do that)
- Adhere to an MCV-like structure
*DONE
- Have (at least one) flow similar to CRUD
*TBD
- Different types of relationships for your models
*TBD
- Basic design (using CSS frameworks is okay, goal is to have a decent basic, so you can show it to companies later)
*WIP
- Check what packages can be useful
*TBD 

### 🌼 Nice to have features (doable)

- Upgrade the design: custom CSS or finetuned usage of CSS frameworks
- Do a UX scan: what areas can be improved?
- Make use of custom error for error handling
- Find a Laravel technique which is new to you to apply

### 🌳 Nice to haves (hard)

- A login system & user management
- Rights management: pay attention to who is allowed to change what items
