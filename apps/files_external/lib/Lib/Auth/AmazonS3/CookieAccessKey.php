<?php
/**
 * SPDX-FileCopyrightText: 2025
 * SPDX-License-Identifier: AGPL-3.0-only
 */
namespace OCA\Files_External\Lib\Auth\AmazonS3;

use OCA\Files_External\Lib\Auth\AuthMechanism;
use OCA\Files_External\Lib\DefinitionParameter;
use OCA\Files_External\Lib\StorageConfig;
use OCP\IL10N;
use OCP\IUser;
/**
 * Amazon S3 authentication via cookies
 */
class CookieAccessKey extends AuthMechanism {
	public const SCHEME_AMAZONS3_COOKIEACCESSKEY = 'amazons3_cookieaccesskey';

	public function __construct(IL10N $l) {
		$this
			->setIdentifier('amazons3::cookieaccesskey')
			->setScheme(self::SCHEME_AMAZONS3_COOKIEACCESSKEY)
			->setText($l->t('Cookie Authentication'))
			->addParameters([
				new DefinitionParameter('key', $l->t('Access key')),
				(new DefinitionParameter('secret', $l->t('Secret key')))
					->setType(DefinitionParameter::VALUE_PASSWORD),
			]);
	}

	
}

