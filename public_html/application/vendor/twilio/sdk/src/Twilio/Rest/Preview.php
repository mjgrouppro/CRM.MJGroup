<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Preview\DeployedDevices as PreviewDeployedDevices;
use Twilio\Rest\Preview\HostedNumbers as PreviewHostedNumbers;
use Twilio\Rest\Preview\Marketplace as PreviewMarketplace;
use Twilio\Rest\Preview\Sync as PreviewSync;
use Twilio\Rest\Preview\Understand as PreviewUnderstand;
use Twilio\Rest\Preview\Wireless as PreviewWireless;

/**
 * @property \Twilio\Rest\Preview\DeployedDevices $deployedDevices
 * @property \Twilio\Rest\Preview\HostedNumbers $hostedNumbers
 * @property \Twilio\Rest\Preview\Marketplace $marketplace
 * @property \Twilio\Rest\Preview\Sync $sync
 * @property \Twilio\Rest\Preview\Understand $understand
 * @property \Twilio\Rest\Preview\Wireless $wireless
 * @property \Twilio\Rest\Preview\DeployedDevices\FleetList $fleets
 * @property \Twilio\Rest\Preview\HostedNumbers\AuthorizationDocumentList $authorizationDocuments
 * @property \Twilio\Rest\Preview\HostedNumbers\HostedNumberOrderList $hostedNumberOrders
 * @property \Twilio\Rest\Preview\Marketplace\AvailableAddOnList $availableAddOns
 * @property \Twilio\Rest\Preview\Marketplace\InstalledAddOnList $installedAddOns
 * @property \Twilio\Rest\Preview\Sync\ServiceList $services
 * @property \Twilio\Rest\Preview\Understand\AssistantList $assistants
 * @property \Twilio\Rest\Preview\Wireless\CommandList $commands
 * @property \Twilio\Rest\Preview\Wireless\RatePlanList $ratePlans
 * @property \Twilio\Rest\Preview\Wireless\SimList $sims
 * @method \Twilio\Rest\Preview\DeployedDevices\FleetContext fleets(string $sid)
 * @method \Twilio\Rest\Preview\HostedNumbers\AuthorizationDocumentContext authorizationDocuments(string $sid)
 * @method \Twilio\Rest\Preview\HostedNumbers\HostedNumberOrderContext hostedNumberOrders(string $sid)
 * @method \Twilio\Rest\Preview\Marketplace\AvailableAddOnContext availableAddOns(string $sid)
 * @method \Twilio\Rest\Preview\Marketplace\InstalledAddOnContext installedAddOns(string $sid)
 * @method \Twilio\Rest\Preview\Sync\ServiceContext services(string $sid)
 * @method \Twilio\Rest\Preview\Understand\AssistantContext assistants(string $sid)
 * @method \Twilio\Rest\Preview\Wireless\CommandContext commands(string $sid)
 * @method \Twilio\Rest\Preview\Wireless\RatePlanContext ratePlans(string $sid)
 * @method \Twilio\Rest\Preview\Wireless\SimContext sims(string $sid)
 */
class Preview extends Domain {
    protected $_deployedDevices;
    protected $_hostedNumbers;
    protected $_marketplace;
    protected $_sync;
    protected $_understand;
    protected $_wireless;

    /**
     * Construct the Preview Domain
     *
     * @param Client $client Client to communicate with Twilio
     */
    public function __construct(Client $client) {
        parent::__construct($client);

        $this->baseUrl = 'https://preview.twilio.com';
    }

    /**
     * @return PreviewDeployedDevices Version deployedDevices of preview
     */
    protected function getDeployedDevices(): PreviewDeployedDevices {
        if (!$this->_deployedDevices) {
            $this->_deployedDevices = new PreviewDeployedDevices($this);
        }
        return $this->_deployedDevices;
    }

    /**
     * @return PreviewHostedNumbers Version hostedNumbers of preview
     */
    protected function getHostedNumbers(): PreviewHostedNumbers {
        if (!$this->_hostedNumbers) {
            $this->_hostedNumbers = new PreviewHostedNumbers($this);
        }
        return $this->_hostedNumbers;
    }

    /**
     * @return PreviewMarketplace Version marketplace of preview
     */
    protected function getMarketplace(): PreviewMarketplace {
        if (!$this->_marketplace) {
            $this->_marketplace = new PreviewMarketplace($this);
        }
        return $this->_marketplace;
    }

    /**
     * @return PreviewSync Version sync of preview
     */
    protected function getSync(): PreviewSync {
        if (!$this->_sync) {
            $this->_sync = new PreviewSync($this);
        }
        return $this->_sync;
    }

    /**
     * @return PreviewUnderstand Version understand of preview
     */
    protected function getUnderstand(): PreviewUnderstand {
        if (!$this->_understand) {
            $this->_understand = new PreviewUnderstand($this);
        }
        return $this->_understand;
    }

    /**
     * @return PreviewWireless Version wireless of preview
     */
    protected function getWireless(): PreviewWireless {
        if (!$this->_wireless) {
            $this->_wireless = new PreviewWireless($this);
        }
        return $this->_wireless;
    }

    /**
     * Magic getter to lazy load version
     *
     * @param string $name Version to return
     * @return \Twilio\Version The requested version
     * @throws TwilioException For unknown versions
     */
    public function __get(string $name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown version ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return \Twilio\InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments) {
        $method = 'context' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return \call_user_func_array([$this, $method], $arguments);
        }

        throw new TwilioException('Unknown context ' . $name);
    }

    protected function getFleets(): \Twilio\Rest\Preview\DeployedDevices\FleetList {
        return $this->deployedDevices->fleets;
    }

    /**
     * @param string $sid A string that uniquely identifies the Fleet.
     */
    protected function contextFleets(string $sid): \Twilio\Rest\Preview\DeployedDevices\FleetContext {
        return $this->deployedDevices->fleets($sid);
    }

    protected function getAuthorizationDocuments(): \Twilio\Rest\Preview\HostedNumbers\AuthorizationDocumentList {
        return $this->hostedNumbers->authorizationDocuments;
    }

    /**
     * @param string $sid AuthorizationDocument sid.
     */
    protected function contextAuthorizationDocuments(string $sid): \Twilio\Rest\Preview\HostedNumbers\AuthorizationDocumentContext {
        return $this->hostedNumbers->authorizationDocuments($sid);
    }

    protected function getHostedNumberOrders(): \Twilio\Rest\Preview\HostedNumbers\HostedNumberOrderList {
        return $this->hostedNumbers->hostedNumberOrders;
    }

    /**
     * @param string $sid HostedNumberOrder sid.
     */
    protected function contextHostedNumberOrders(string $sid): \Twilio\Rest\Preview\HostedNumbers\HostedNumberOrderContext {
        return $this->hostedNumbers->hostedNumberOrders($sid);
    }

    protected function getAvailableAddOns(): \Twilio\Rest\Preview\Marketplace\AvailableAddOnList {
        return $this->marketplace->availableAddOns;
    }

    /**
     * @param string $sid The SID of the AvailableAddOn resource to fetch
     */
    protected function contextAvailableAddOns(string $sid): \Twilio\Rest\Preview\Marketplace\AvailableAddOnContext {
        return $this->marketplace->availableAddOns($sid);
    }

    protected function getInstalledAddOns(): \Twilio\Rest\Preview\Marketplace\InstalledAddOnList {
        return $this->marketplace->installedAddOns;
    }

    /**
     * @param string $sid The SID of the InstalledAddOn resource to fetch
     */
    protected function contextInstalledAddOns(string $sid): \Twilio\Rest\Preview\Marketplace\InstalledAddOnContext {
        return $this->marketplace->installedAddOns($sid);
    }

    protected function getServices(): \Twilio\Rest\Preview\Sync\ServiceList {
        return $this->sync->services;
    }

    /**
     * @param string $sid The sid
     */
    protected function contextServices(string $sid): \Twilio\Rest\Preview\Sync\ServiceContext {
        return $this->sync->services($sid);
    }

    protected function getAssistants(): \Twilio\Rest\Preview\Understand\AssistantList {
        return $this->understand->assistants;
    }

    /**
     * @param string $sid A 34 character string that uniquely identifies this
     *                    resource.
     */
    protected function contextAssistants(string $sid): \Twilio\Rest\Preview\Understand\AssistantContext {
        return $this->understand->assistants($sid);
    }

    protected function getCommands(): \Twilio\Rest\Preview\Wireless\CommandList {
        return $this->wireless->commands;
    }

    /**
     * @param string $sid The sid
     */
    protected function contextCommands(string $sid): \Twilio\Rest\Preview\Wireless\CommandContext {
        return $this->wireless->commands($sid);
    }

    protected function getRatePlans(): \Twilio\Rest\Preview\Wireless\RatePlanList {
        return $this->wireless->ratePlans;
    }

    /**
     * @param string $sid The sid
     */
    protected function contextRatePlans(string $sid): \Twilio\Rest\Preview\Wireless\RatePlanContext {
        return $this->wireless->ratePlans($sid);
    }

    protected function getSims(): \Twilio\Rest\Preview\Wireless\SimList {
        return $this->wireless->sims;
    }

    /**
     * @param string $sid The sid
     */
    protected function contextSims(string $sid): \Twilio\Rest\Preview\Wireless\SimContext {
        return $this->wireless->sims($sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Preview]';
    }
}