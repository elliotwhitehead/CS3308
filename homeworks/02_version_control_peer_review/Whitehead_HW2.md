Author: Elliot Whitehead
Email: elliot.whitehead@colorado.edu
Instructor: Alan Paradise
TA: Rashmi Shetty
Section: 104

# Part 1 - Version Control (10 points)

##### 1. You have edited the file my_program.py locally but you have not yet committed the changes. You realize that you are doing the wrong thing and would like to forget the changes that you have made. What command do you use to acquire a clean version of my_program.py that corresponds to the most recent committed changes?

	A) git checkout my_program.py

##### 2. You have edited my_program.py and committed your changes to your local repo. After a conversation with the rest of your team, you realize that the feature that you implemented must be completely re-written. What command should you use to revert to the commit before this most recent one?

	A) git revert <commit_hash>

##### 3. What are 2 reasons that developers might use feature branches rather than developing on the master branch in a distributed version control system?

	A) Using branches allows multiple developers to work on the same file concurrently without running into any merge conflicts when interatcting witht the repository. It also allows developers to experiment and try new things, without being concerned about breaking the codebase.

##### 4. (4 points) You have learned how to use the command git push to move your changes from your local repository to the remote repository (e.g. git push origin master). Now read about [Pull Requests](https://help.github.com/articles/about-pull-requests/), which are a common strategy for teams to merge new code into their code bases. What is different between a pull request and using git push? What is the same? How is a pull request different from the command git pull?

	A) A Pull Request is different than using the command `git push` because a `git push` is a terminal command which pushes a branch to the remote, while a Pull Request is a action on GitHub.com that notifies teammates and provides a place for discussion of changes that you are proposing to add to the codebase. These two commnands are however similar in their end result - they both merge new changes into the remote repository. A pull request is different from git pull because a Pull Request is a request for new changes to be added to a remote repository branch, while the command `git pull` is used to 'pull' new changes from the remote repository onto a user's local machine / repository.



---



# Part 2 - Software Development Methodologies (6 points)

##### 1. Reflect on your experiences in the agile planning lab. What are some challenges that you think a team following an agile software development methodology might face that a team using a waterfall methodology wouldn't face?

	A) A major planning problem that an agile team might encounter that a waterfall-based team will not is scope creep. Since Agile sprints are much more fluid compared to a waterfall methodology, it is much easier for new features and ideas to be in corporated into the project as it goes along.

##### 2. Why are some stories more difficult to estimate than others?

	A) Some stories are more difficult to esitmate than others because their complexity is unknown. It's difficult to know how complex a task is if it involves technologies that are foreign to a team or developer.

##### 3. What should you do if there is major disagreement about the point estimate of a story?

	A) If there is a diagreement about a story point, we will discuss our reasoning the different point values, and make a team decision to move on.


---



# Part 3 - Web App Design (3 points)

##### 1. (3 Points) Choose a website that you frequently use (e.g. Facebook, Amazon, The Denver Post, eBay, something that you visit at least once a week). What are 2 design decisions that this website made that you appreciate? What are 2 things that you think they could do better? Do you think that this website is easily accessible for uses that have disabilities (why or why not?) Answer in 3 - 6 sentences.

	A) I use DigitalOcean a lot for web hosting. The design of their site is absolutely beautiful. It's simple, relaxing and always shows you what you need to know on any given page. Another thing I really enjoy is their typography across the entire site. One thing that makes Digital Ocean a little frustrating to use is that sometimes it's difficult to find a link or tool that you're looking for. Because they keep their site so minimal, there are a lot hidden features buried in places, and you have to remember how to get back to them. Another thing they could do better is provide a toggle switch for a 'night-mode' for their UI, as it's very bright and hard to look at in the wee hours of the night, when I always seem to be using it. I think their site is accessible, as there are not any pop-us, and the site also scored well on an accessibility test from wave.webaim.org.



---



# Part 4 - Peer Code Review (6 points)

##### 1. Lab number seven will focus on peer code review. Conducting code reviews is an industry-standard practice in which changes to the code base are reviewed by peers and supervisors. Why would a company or team want to follow this practice? How might code reviews affect the code base overall?

	A) Code review is essential for engineering teams to maintain a sustainable, reliable codebase. Without code review, there is no way for developers on a team to maintain a consistent and readable code base. Code review helps ensure that a code base is built properly, stays secure, and also remains readable for future developers who will have to work with it.

##### 2. Think about the situation in which you have submitted a feature for code review. What kind of comments would you like to receive? What kind of testing would you ideally like your reviewers to conduct? What kind of testing do you think that reviewers do in real-world situations? How would you want to react to constructive criticism?

	A) Code reviews are very important and critical to help developers grow and write better code. I would like to recieve comments that are honest, to the point but not condescending. I would expect that a reviewer would test my code to cover all parts of the app that the code affected. In the real world, reviewers do not do much testing at all, as it is usually handled automatically, with a Continuous Intgration / Testing framework. I will react very positively to contructive criticism, as it is the only way that I can grow as a developer and teammate.

##### 3. Think about the situation in which you are reviewing a team-members code. What are some things that you might look out for in particular? What are two ways that your attitude as a reviewer could affect team dynamics?

	A) When reviewing a teammate's code, I will watch for comments, to make sure that non-self explanatory code is well documented and understandable for everyone. I will also review for efficiency to make sure that code isn't written in overly complex ways. My attitude while reviewing code can either create a welcoming, productive environment to work together, or a desctructive, condescending environment where people are afraid to work together and share their work.