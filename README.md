# Overview
There aren't any good options for keeping track of CVE notifications,
and getting alerted about only those CVEs that affect you and your stack.
This project attempts to provide a mechanism for subscribing to CVE feeds,
and selectively alerting you (or your team) about CVEs that impact you.

## Roadmap
1. Develop dispatch-core
2. Develop data-source plugins
3. Develop basic user-interface (uses dispatch-core dependency)

## Installation
TBD

### Requirements
TBD

# Architecture
The Dispatch project is being broken into several distinct repos, to provide
greater flexibility in installing and developing on it. This is the dispatch-core
repo, which is the primary functionality of the system.

The architecture follows the ideas in Uncle Bob's [Clean
Architecture](https://8thlight.com/blog/uncle-bob/2012/08/13/the-clean-architecture.html).
With that in mind, this repo is the core functionality of the app (eg, the
entities and interactors). By structuring things this way, we decouple the
primary application logic from delivery and data persistence mechanisms, and
thereby allow maximum flexibility in how this application is installed.

## Basic Workflow (v 0.1.0)
1. Script Trigger (cron, UI button, whatever)
2. Pass in date of last check
3. Workflow script
	* Queries CVE Datasource for vulnerabilities since {{date}}
	* Queries local config for list of technologies to watch for
	* Matches any new CVEs against the watch list
	* Sends alerts for any matches

# Contributing
Welcome! We're happy to have you. 

## Workflow
Dispatch uses\* the [Git Flow](http://nvie.com/posts/a-successful-git-branching-model/)
branching model.

\* Note: This project is still in early development, so it's a little wild-west.
Once the initial dust settles, it will use Git Flow.

## Code of Conduct
The dispatch projects use the [contributer code of conduct v 1.4](http://contributor-covenant.org/version/1/4/).
As the project develops, more information will be posted here. In the meantime,
Instances of abusive, harassing, or otherwise unacceptable behavior may be
reported by contacting the project team at dispatch@null-set.com.

# Security
If you find a security issue in dispatch, please practice
[responsible disclosure](https://en.wikipedia.org/wiki/Responsible_disclosure)
by sending an email to security@null-set.com.
