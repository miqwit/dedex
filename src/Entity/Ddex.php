<?php

/*
 * The MIT License
 *
 * Copyright 2020 Mickaël Arcos <@miqwit>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace DedexBundle\Entity;

/**
 * This class is the main entry point to all the DDEX file content. It's the
 * equivalent of the highest level of the XML file (inside the <ddex> tag).
 *
 * @author Mickaël Arcos <@miqwit>
 */
class Ddex {

	function __construct() {
		$this->messageHeader = new MessageHeader();
		$this->resourceList = new ResourceList();
	}

	/**
	 * The NewReleaseMessage in ERN-3 contains a field UpdateIndicator. This field has 
	 * been deprecated and users are strongly discouraged to make use of it. DDEX has 
	 * removed the field in ERN-4.
	 * 
	 * 
	 * The only purpose for such an UpdateIndicator field would be to indicate to the 
	 * recipient that it already has received and ingested a message containing the 
	 * same data elements and that the current message provides an update to the older 
	 * message,
	 * 
	 * This assumes, therefore, that
	 * - The sender knows that it has already send a message about the same, in our 
	 *   case, Release;
	 * - The recipient has received this message;
	 * - The recipient has ingested this message (the original message may still be in 
	 *   a ingestion queue when an urgent update is sent); and
	 * - The recipient still has  the Release in its database when the update message 
	 *   arrives.
	 * 
	 * A recipient only has any benefit if all of these conditions are met – if only 
	 * one is not met, receiving a message that purports to be an update is, in 
	 * essence a new message. Any decent implementation therefore still needs to check 
	 * whether the entities communicated in a NewReleaseMessage is already in the 
	 * database – thus sidelineing, if not ignoring, the UpdateIndicator. From 
	 * https://kb.ddex.net/pages/viewpage.action?pageId=327772
	 * 
	 * (c) Digital Data Exchange, LLC
	 * 
	 * @var string 
	 */
	private ?string $updateIndicator = null;

	function getUpdateIndicator(): ?string {
		return $this->updateIndicator;
	}

	function setUpdateIndicator(?string $updateIndicator): void {
		$this->updateIndicator = $updateIndicator;
	}

	/**
	 * The IsBackfill flag is optional and should only be used for indicating 
	 * that an XML file is part of a special backfill of a (typically large) 
	 * catalogue.
	 * 
	 * @var bool 
	 */
	private ?bool $isBackfill;

	function getIsBackfill(): ?bool {
		return $this->isBackfill;
	}

	function setIsBackfill(?bool $isBackfill): void {
		$this->isBackfill = $isBackfill;
	}

	/**
	 * @var MessageHeader
	 */
	private MessageHeader $messageHeader;

	function getMessageHeader(): MessageHeader {
		return $this->messageHeader;
	}

	function setMessageHeader(MessageHeader $messageHeader): void {
		$this->messageHeader = $messageHeader;
	}

	/**
	 * The XML namespace definitions (xmlns) for all tags in that message. This is 
	 * the namespace of the DDEX standard you are trying to work with and is 
	 * referenced in the text of the standard (in ERN 4.1.1 it is in Clause 6.1, 
	 * for instance. 
	 * @link https://kb.ddex.net/display/HBK/Preambles+for+XML-based+DDEX+Messages
	 * 
	 * @var string 
	 */
	private string $xmlns_Ern;

	function getXmlns_Ern(): string {
		return $this->xmlns_Ern;
	}

	function setXmlns_Ern(string $xmlns_Ern): void {
		$this->xmlns_Ern = $xmlns_Ern;
	}

	/**
	 * The XML namespace definitions for XML Schema itself.
	 * @link https://kb.ddex.net/display/HBK/Preambles+for+XML-based+DDEX+Messages
	 * 
	 * @var string
	 */
	private string $xmlns_Xs;

	function getXmlns_Xs(): string {
		return $this->xmlns_Xs;
	}

	function setXmlns_Xs(string $xmlns_Xs): void {
		$this->xmlns_Xs = $xmlns_Xs;
	}

	/**
	 * The location of the XSD file for the namespace that defines the elements 
	 * of the DDEX message you are trying to work with. The XSD file for the 
	 * namespace defined in line 3  can be found at 
	 * "http://ddex.net/xml/ern/411/release-notification.xsd".
	 * 
	 * The preamble above points to an XSD file hosted on a DDEX Server. It can 
	 * also point to a file in your local hard drive, In that case that line 
	 * would be, for instance:
	 * xsi:schemaLocation="http://ddex.net/xml/ern/411 file:../xsd/ern/release-notification.xsd" 
	 * 
	 * There is no need to reference any other XML schema definition files (e.g. 
	 * the ones containing the allowed value sets) as these XSD files are imported 
	 * by the main XSD file.
	 * 
	 * @link https://kb.ddex.net/display/HBK/Preambles+for+XML-based+DDEX+Messages
	 * 
	 * @var string 
	 */
	private string $xs_SchemaLocation;

	function getXs_SchemaLocation(): string {
		return $this->xs_SchemaLocation;
	}

	function setXs_SchemaLocation(string $xs_SchemaLocation): void {
		$this->xs_SchemaLocation = $xs_SchemaLocation;
	}

	/**
	 * The version of schema used, for instance "ern/382".
	 * 
	 * @var string
	 */
	private string $messageSchemaVersionId;

	function getMessageSchemaVersionId(): string {
		return $this->messageSchemaVersionId;
	}

	function setMessageSchemaVersionId(string $messageSchemaVersionId): void {
		$this->messageSchemaVersionId = $messageSchemaVersionId;
	}

	/**
	 * For example "CommonReleaseTypesTypes/14/AudioAlbum".
	 * 
	 * @var string
	 */
	private string $releaseProfileVersionId;

	function getReleaseProfileVersionId(): string {
		return $this->releaseProfileVersionId;
	}

	function setReleaseProfileVersionId(string $releaseProfileVersionId): void {
		$this->releaseProfileVersionId = $releaseProfileVersionId;
	}

	/**
	 * Any XML attributes that the DDEX-defined message needs 
	 * (here: "LanguageAndScriptCode").
	 * 
	 * @var string
	 */
	private string $languageAndScriptCode;

	function getLanguageAndScriptCode(): string {
		return $this->languageAndScriptCode;
	}

	function setLanguageAndScriptCode(string $languageAndScriptCode): void {
		$this->languageAndScriptCode = $languageAndScriptCode;
	}

	/**
	 * The Resource List provides details of the different assets that make up the 
	 * entire release. Typical resources are sound recordings, videos and images. 
	 * Each resource will have a unique reference anchor within the message (e.g. 
	 * A1, A2, A3) which corresponds to the track number (e.g. track 1, 2, 3). The 
	 * resource references will be referenced later in the Release section. The 
	 * metadata defined in the Resource includes ISRC, artist, title and 
	 * contributors.
	 * 
	 * Also contained in the Resource section is the Technical Resource Details, 
	 * which references the specific binary files with details including the codec 
	 * type and bit rate being delivered to the partner. The Technical Resource 
	 * Details will provide information about both the full length and preview 
	 * clip binary files.
	 * 
	 * Artwork will be a resource listed after the track resources. Cover artwork 
	 * will be identified as an image resource with a resource reference after 
	 * the last track resource. For example, on a 10-track album resource 
	 * reference A11 would be the image resource relating to the cover artwork.
	 * 
	 * @var array[Resource]
	 */
	private ResourceList $resourceList;

	function getResourceList(): ResourceList {
		return $this->resourceList;
	}

	function setResourceList(ResourceList $resourceList): void {
		$this->resourceList = $resourceList;
	}

}
