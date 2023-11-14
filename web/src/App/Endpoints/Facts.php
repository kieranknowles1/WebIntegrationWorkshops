<?php

namespace App\Endpoints;

class Facts extends Endpoint
{
    public function getSupportedMethods(): array
    {
        return ['GET'];
    }
    protected function realGetData(): mixed
    {
        $facts = [
            "Studies have shown that 90% of programming issues are fixed by yelling at the computer until the developer realizes they're the one who messed up.",
            "The number of gay pirate assassins is higher than you might think.",
            "80% of statistics are made up on the spot.",
            "The average person has one fallopian tube. I don't know what that is.",
            "50% of dogs are good boys.",
            "Averages are meaningless. For example, the average person has one testicle.",
            "If you drive off with less than £10 of petrol, most places won't bother chasing you. I have 200 jerry cans in my garage.",
            "If you need to get home after a night out, take the bus. That way it won't be your insurance that's invalid.",
            "It's Tuesday. If you're reading this and it isn't Tuesday, try again tomorrow.",
            "See that goat headbutting the fence. I don't know what he's thinking, but it isn't very much from the looks of it.",
            "If you want something and can't pay for it, just take it.",
            "If you're doing tax evasion, don't tell someone who works at HMRC or you'll have to give them a cut.",
            "If someone offers you a bribe, take it and then report them to the police.",
            "When a ship is sinking, it's the captain's job to test the lifeboats.",
            "I have no idea what my code does, I just copy from Stack Overflow and ChatGPT",
            "418 can be considered a substitute for 405",
            "You can get through any door with 2 cups of coffee, a lanyard, and some confidence.",
            "If you ask for nein bottles of beer in germany, you'll get nein bottles and won't pay a cent. Just be polite and ask to have it bitter.",
            "If you see a debate between two people, try to find a compromise that unites them against you. For example, arrays should start at 0.5.",
            "If you can't find a compromise, sit back and enjoy the show.",
            "People with guilty consciences are more easily startled by incomplete",
            "Programming is the art of taking the wrong approach and making it work anyway.",
            "Any library can do anything if you abuse it enough.",
            "English is a mess, I blame the French.",
            "If you don't have a plan you don't know what you're doing. Therefore, you can't be doing it wrong.",
            "The British have a tradition of invading other countries for food they don't like, then coming up with a god forsaken recipe such as deep fried mars bars.",
            "Global variables are fun, until you run into one of their many issues.",
            "100 randomly selected people were surveyed, the most common answer was 'Who are you and why are you in my house?'.",
            "Most people can run faster when they're being chased by an angry guy with a knife.",
            "The perfect halloween costume for a student is a werewolf. The tiredness and hairiness are already there.",
            "You can fix all errors by disabling the error checking.",
            "Given that the French assisted the Americans in the war of independence, blaming the Americans for something is the same as blaming the French.",
            "Git blame is a great way to find out who to blame for your problems. Hint: it's you.",
            "These facts are all true, any disagreements should be settled with a duel. Refusal to duel means you will never reach Valhalla.",
            "Docker seems fun until you have to use it. Then it's a prison sentence that you have to get node running to be let free.",
            "Boris Johnson is a suspiciously similar name to Bojo the clown.",
            "Any plan that involves the phrase 'trust me' is doomed to fail.",
            "Chefs and engineers are both frequently full of themselves. An engineer who works as a chef to pay the bills as a student is the worst of both worlds.",
            "This was supposed to be short, but I got carried away.",
            "People with an exhaust that pops and bangs are bragging about how their car is badly tuned and compensating for being a few inches shorter than average.",
            "The sequel trilogy makes much more sense if you assume that the main characters are all high on death sticks. Except for Finn who is doing all the actual work.",
            "The best way to get a job is to be the only applicant through any means necessary.",
            "I Expect You To Die combines Bond, MacGyver, escape rooms, except that Bond is a complete idiot and survives by sheer luck and the intro music is far too catchy.",
            "The British have long forgotten why they hate the French, at some point we just started going along with it.",
            "Negotiating is easy, I want £20 million, you want the hostages back, a win-win for both of us.",
            "Some species of animals have a name for when you don't know what their owners call them. For examples, all lizards are called Dave.",
            "The number of bad ideas that seemed good at the time is directly proportional to the amount of alcohol consumed.",
            <<<LONG_ONE
            The more times you replay Skyrim, the weirder the bugs get. , we forgot what the players name was, let's just use the first string we find.
            Why is there stuff from a completely different cell in this one? How is the game running while over the plugin limit? Why is it valid to load a plugin before its dependencies?
            I've only just started a new game, why does Resaver say the save is broken beyond repair? Why is this quest running when the non-optional alias is empty?
            Why do I have a second mouth in the middle of the map that makes me invisible randomly? Why is my face replaced with the last Khajiit that loaded?
            Why do I hear fighting upstairs and why is this guy giving the noise the 'the f is going on up there' look?

            All of these and more have happened to me.
            LONG_ONE,
            "Removing the complaints form is the most effective way to reduce complaints.",
            "Most of Britain's extremely specific laws probably came about when a nobleman did something stupid and had to justify it somehow. Sure I killed him, but what did he expect when he was a speaking geordie with a scouse accent on a Tuesday morning in the bounds of Hull?",
            "American units make no sense, since blaming the Americans is the same as blaming the French, I blame the French. Even though they made the metric system.",
            "Most of the experiments in the SCP foundation are just the researchers messing with the D class.",
            "Sports invented by the British are played all around the world and the British are terrible at them. Sports invented by the Americans are only played in America and the Americans are #1 at them. Except for American Football which is just rugby.",
            "1 standard Freedom Land™ can is 355ml. That makes no sense whatsoever.",
            "You have successfully subscribed to Random Facts By Text. You have selected 'HOURLY' as your frequency. Note that this is not a free service and you will be charged £1 per text. To unsubscribe, send a hand written letter using a quill and ink containing your phone number, the sentence 'UnSub me m8' written using an ink and quill to Svalbard.",
            "PHP is a recursive acronym for Programmers Hate PHP.",
            "The best way of fixing issues in PHP is to rewrite everything in TypeScript.",
            "The main regional export of the north east is Greggs. Half of the country's Greggs are on Haymarket",
        ];
        $sources = [
            null,
            "null",
            "I made it up",
            "Just Google it",
            "I'm not sure, but I think it's true",
            "Other, please specify",
            "I saw it in a book once, I can't remember if the book was fiction or not",
            "What's a source?",
            "Why would you want to put a sauce on json?",
            "No idea mate",
            "TODO: Find something that looks believable",
            "Trust me",
        ];
        return [
            "fact" => $facts[array_rand($facts)],
            "source" => $sources[array_rand($sources)],
        ];
    }
}
