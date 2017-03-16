<?php
/**
 * @copyright Copyright (c) 2016 Julius Härtl <jus@bitgrid.net>
 *
 * @author Julius Härtl <jus@bitgrid.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Direct_menu\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataDownloadResponse;
use OCP\AppFramework\Utility\ITimeFactory;
use OCP\IRequest;

class AppController extends \OCP\AppFramework\Controller {

	public function __construct($appName, IRequest $request, ITimeFactory $timeFactory) {
		parent::__construct($appName, $request);
		$this->timeFactory = $timeFactory;
	}

	/**
	 * @NoCSRFRequired
	 * @PublicPage
	 *
	 * @return DataDownloadResponse
	 */
	public function stylesheet() {
		$inverted = false;
		if(\OCP\App::isEnabled('theming') && class_exists('\OCA\Theming\Util')) {
			$color = \OC::$server->getThemingDefaults()->getMailHeaderColor();
			$util = \OC::$server->query(\OCA\Theming\Util::class);
			$inverted = $util->invertTextColor($color);
		}

		$navigation = \OC::$server->getNavigationManager()->getAll();
		$navigationCount = count($navigation);

		// 250px for icon/appname
		// 170px for user menu + 1 icon spacing
		// 120px open search box
		$width = $navigationCount*50+250+170+120;

		$params = [
			'width' => $width,
			'inverted' => $inverted
		];
		$template = new TemplateResponse('direct_menu', 'direct_menu', $params, 'blank');
		$response = new DataDownloadResponse($template->render(), 'style', 'text/css');
		$response->addHeader('Expires', date(\DateTime::RFC2822, $this->timeFactory->getTime()));
		$response->addHeader('Pragma', 'cache');
		$response->cacheFor(3600);
		return $response;
	}

}