# **DDEX ERN changelog: 3.7 to 4.3.2**

This document traces, version by version, how the DDEX Electronic Release Notification (ERN) schema changed between 3.7 and 4.3.2. Each version has an overview followed by a field-by-field table with an XML example.

## **Scope, sources and method**

**Versions covered.** 3.7, 3.8, 3.8.1, 3.8.2, 3.8.3, 4.1, 4.1.1, 4.2, 4.3, 4.3.1, 4.3.2. There is no ERN version "3.8.7": the 3 branch ends at 3.8.3 (the last 3.x XSD published). The starting point is therefore 3.7, so that the whole end of the 3 branch is covered. No 4.0 is covered: there is no "ern/40" XSD among the files analysed, and the 4 branch starts at 4.1.  
**Sources.**

> * Official release-notification.xsd files: 3.7, 3.8, 3.8.1, 3.8.2, 3.8.3 and 4.3.2 (supplied), 4.1, 4.1.1, 4.2, 4.3 and 4.3.1 (repository [miqwit/dedex](https://github.com/miqwit/dedex), branch version-431 for 4.3.1).  
> * Available AVS (Allowed Value Sets) files: avs\_20161006 (3.8.2), avs\_20200108 (3.8.3), avs4 (4.1), avs411 (4.1.1), avs43 and avs431 (4.3 / 4.3.1, the AVS shared by all DDEX standards).  
> * Official release notes: [ERN 4.3.2, Annex A](https://ern.ddex.net/electronic-release-notification-message-suite-part-1-definitions-of-messages/annex-a-\(informative\)-release-notes).  
> * Description of the dedex ERN 4.3.1 PR (file PR\_431.md, recovered from the history of the version-431 branch, PR \#44).

**Method.** Each XSD was converted into a model (complex types, child elements with type and cardinality, attributes with type and required/optional status, simple types with patterns and enumerations), then compared with the previous version by a script. Every change listed here comes from that diff. The explanations of "why" come from the DDEX release notes and from the definitions inside the XSDs. The XML examples are illustrative: they show the expected shape, not a complete message.  
**Limitations.**

> * The diff ignores element order within sequences and documentation text.  
> * AVS evolve independently of the schemas (DDEX updates them continuously, and since 4.2 the AvsVersionId attribute states which version is used). AVS diffs were only done where both files were available, and only for the lists actually referenced by the ERN schema. For 3.7, 3.8 and 3.8.1 the XSD imports the remote "current" AVS, so value changes cannot be dated.  
> * The 4.2 XSD in the dedex repository does not declare the AvsVersionId attribute, which DDEX says was introduced in 4.2. It appears in the 4.3 XSD. This is probably a revision of the 4.2 XSD published after the one copied into dedex.

## **Version summary**

| Version | Namespace | Kind | Main changes | Compatible with previous |
| :---- | :---- | :---- | :---- | :---- |
| 3.8 | ern/38 | Minor | New PurgeReleaseMessage, artist nationality and performances, EIDR for videos, typed percentages. | Almost (RightSharePercentage and SequenceNumber types changed) |
| 3.8.1 | ern/381 | Corrective | Preview dates with time of day (dateTime) in DealTerms. | Yes |
| 3.8.2 | ern/382 | Corrective | RightsClaimPolicy: several conditions allowed, "ReferenceCreation" condition. | Yes |
| 3.8.3 | ern/383 | Corrective | Territory codes widened to AllTerritoryCode (historical territories). | Yes |
| 4.1 | ern/41 | Major (rewrite) | Model fully redesigned: PartyList and references, "DetailsByTerritory" removed, DisplayTitle titles, one main Release \+ TrackReleases, simplified deals, works and collections removed. | No |
| 4.1.1 | ern/411 | Corrective | IsCredited, IsCover, Keywords/Synopsis on TrackRelease, rights controllers by party reference. | No (ResourceRightsController) |
| 4.2 | ern/42 | Minor | Recording sessions, genre categories, ReleaseAdmin, release visibility separated from deals, multiple encodings, dialects (BCP 47). | No (preview dates moved) |
| 4.3 | ern/43 | Major | Mandatory SoundRecordingEdition / VideoEdition (immersive audio), standalone clips and ClipRelease, RecordingFormat, vocals, RightsClaimPolicy segments, AvsVersionId. | No |
| 4.3.1 | ern/431 | Minor | Generative AI (ContainsAI, AiContribution), Brand, FormalTitle / GroupingTitle replacing AdditionalTitle, DisplayGenre, composite Role, optional ParentalWarningType. | No (Role, Genre, AdditionalTitle) |
| 4.3.2 | ern/432 | Corrective | Type of Brand/BrandId fixed (ProprietaryId). | Yes for valid messages |

Throughout the 3 branch, the version is carried both by the namespace (xmlns:ern="http\://ddex.net/xml/ern/38") and by the mandatory attribute MessageSchemaVersionId="ern/38". From 4.1 onward, only the namespace carries the version.

## **ERN 3.8 (compared with 3.7)**

### **Overview**

An enrichment release of the 3 branch. It adds a new message, PurgeReleaseMessage, to ask a DSP to remove entirely a release that a normal takedown cannot remove (for example because its metadata is corrupt). It also enriches contributors (nationality, performances), adds the EIDR identifier for videos and types a few numeric fields more strictly. The orphan type ExtendedResourceGroup is removed. CatalogListMessage still exists.

### **Field-by-field changes**

| Composite / path | Change | 3.7 | 3.8 | Example |
| :---- | :---- | :---- | :---- | :---- |
| PurgeReleaseMessage (root) | New message | absent | MessageHeader \[1\], PurgedRelease \[1\], @MessageSchemaVersionId (required), @LanguageAndScriptCode | \<ern:PurgeReleaseMessage MessageSchemaVersionId="ern/38"\>\<MessageHeader\>…\</MessageHeader\>\<PurgedRelease\>…\</PurgedRelease\>\</ern:PurgeReleaseMessage\> |
| PurgedRelease | New composite | absent | ReleaseId \[0..1\], Title \[0..n\], ResourceContributor \[0..n\] | \<PurgedRelease\>\<ReleaseId\>\<ICPN\>0602345678901\</ICPN\>\</ReleaseId\>\<Title\>\<TitleText\>Album X\</TitleText\>\</Title\>\</PurgedRelease\> |
| Artist (DisplayArtist, DisplayConductor…), DetailedResourceContributor, IndirectResourceContributor | Nationality added | absent | Nationality \[0..n\], type ddexC\_CurrentTerritoryCode | \<DisplayArtist\>\<PartyName\>…\</PartyName\>\<Nationality\>FR\</Nationality\>\</DisplayArtist\> |
| DetailedResourceContributor | Performance added | absent | Performance \[0..n\]: Territory \[0..1\], Date \[0..1\] | \<Performance\>\<Territory\>GB\</Territory\>\<Date\>2015-06-01\</Date\>\</Performance\> |
| VideoId | EIDR added | absent | EIDR \[0..n\] (string) | \<VideoId\>\<EIDR\>10.5240/7791-8534-2C23-9030-8610-5\</EIDR\>\</VideoId\> |
| RightShare, RightsController, TypedRightsController / RightSharePercentage | Type changed | decimal | Percentage (decimal with @HasMaxValueOfOne attribute) | \<RightSharePercentage HasMaxValueOfOne="true"\>0.5\</RightSharePercentage\> (= 50%; without the attribute, the value is read on a 0 to 100 scale) |
| SoundRecordingDetailsByTerritory, VideoDetailsByTerritory, MidiDetailsByTerritory / SequenceNumber | Type changed | string | integer | \<SequenceNumber\>3\</SequenceNumber\> (a value such as "3a" becomes invalid) |
| DealResourceReferenceList (InstantGratificationResourceList, PreOrderIncentiveResourceList) / Period | Cardinality | \[1..1\] | \[0..1\] | The list can be sent without a period. |
| ICPN / @IsEan | Attribute made optional | required | optional | \<ICPN\>0602345678901\</ICPN\> is now valid without IsEan. |
| ExtendedResourceGroup | Type removed | present (referenced only by itself) | absent | No impact on messages: the type was unused. |

## **ERN 3.8.1**

### **Overview**

A targeted fix to deals: the display and preview start dates can be given with a time of day (dateTime), as an alternative to plain dates. Useful for releases synchronised to local midnight or to a precise time.

### **Field-by-field changes**

| Composite / path | Change | 3.8 | 3.8.1 | Example |
| :---- | :---- | :---- | :---- | :---- |
| DealTerms / ReleaseDisplayStartDateTime | Added (in a choice with the plain date) | ReleaseDisplayStartDate only | \+ ReleaseDisplayStartDateTime (dateTime) | \<ReleaseDisplayStartDateTime\>2017-03-10T00:00:00+01:00\</ReleaseDisplayStartDateTime\> |
| DealTerms / TrackListingPreviewStartDateTime | Added | absent | dateTime | \<TrackListingPreviewStartDateTime\>2017-03-03T09:00:00Z\</TrackListingPreviewStartDateTime\> |
| DealTerms / CoverArtPreviewStartDateTime | Added | absent | dateTime | same as above |
| DealTerms / ClipPreviewStartDateTime | Added | absent | dateTime | same as above |
| DealTerms / PreOrderPreviewDateTime | Added | PreOrderPreviewDate only | \+ PreOrderPreviewDateTime | \<PreOrderPreviewDateTime\>2017-02-01T00:00:00Z\</PreOrderPreviewDateTime\> |

## **ERN 3.8.2**

### **Overview**

A fix to rights claim policies (Content ID and similar): a RightsClaimPolicy can carry several conditions, or none, and a condition can state which reference creation is used for detection.

### **Field-by-field changes**

| Composite / path | Change | 3.8.1 | 3.8.2 | Example |
| :---- | :---- | :---- | :---- | :---- |
| RightsClaimPolicy / Condition | Cardinality | \[1..1\] | \[0..n\] | Two conditions (minimum duration AND minimum share) in one policy. |
| Condition / ReferenceCreation | Added | absent | \[0..1\], AVS ReferenceCreation: ReferenceResource | ConsumerResource | \<Condition\>\<Value\>30\</Value\>\<Unit\>Second\</Unit\>\<ReferenceCreation\>ReferenceResource\</ReferenceCreation\>\<RelationalRelator\>MoreThanOrEqualTo\</RelationalRelator\>\</Condition\> |

## **ERN 3.8.3**

### **Overview**

The last version of the 3 branch. Several fields move from CurrentTerritoryCode (current territories) to AllTerritoryCode, which includes historical territories (for example "YU" or "SU"). This is needed to describe correctly the nationality of artists or older recording locations. The associated AVS (avs\_20200108) also adds a few values.

### **Field-by-field changes**

| Composite / path | Change | 3.8.2 | 3.8.3 | Example |
| :---- | :---- | :---- | :---- | :---- |
| Artist / Nationality; DetailedResourceContributor / Nationality | Type widened | ddexC\_CurrentTerritoryCode | AllTerritoryCode | \<Nationality\>YU\</Nationality\> becomes valid. |
| DetailedResourceContributor / Citizenship | Type widened | CurrentTerritoryCode | AllTerritoryCode | \<Citizenship\>SU\</Citizenship\> |
| ArtistDelegatedUsageRights / TerritoryOfRightsDelegation | Type widened | CurrentTerritoryCode | AllTerritoryCode |  |
| RightShare, SocietyAffiliation / TerritoryCode and ExcludedTerritoryCode | Type widened | CurrentTerritoryCode | AllTerritoryCode |  |
| EventDate / @TerritoryCode (used by \~50 date fields) | Explicit type | untyped (any string) | avs:AllTerritoryCode | \<ReleaseDate TerritoryCode="DE"\>2020-05-01\</ReleaseDate\>: a value outside the list becomes invalid. |
| AVS IsoLanguageCode | Values added |  | bgc, qqa to qqj |  |
| AVS ReleaseRelationshipType | Value added |  | IsDifferentEncoding |  |
| AVS ReleaseType | Value added |  | AudioDramaRelease |  |
| AVS ResourceContributorRole | List greatly extended |  | 224 roles added (the list grows from 51 to 275 values) (AdditionalEngineer, AAndRAdministrator, ChoirMember, ClubDJ, CoProducer, Dancer, DJ…) |  |

## **ERN 4.1 (compared with 3.8.3)**

### **Overview**

4.1 is the first published version of the 4 branch and a complete rewrite of the message. Of the 209 types in 3.8.3, 140 are removed, 100 are created and 44 are modified. A 3.x message cannot be converted by simple renaming. DDEX describes it as a "significantly simpler" way to communicate releases and deals. The main lines:

> * **Parties are declared once.** A new PartyList holds every person and company, each with a local reference (P1, P2…). Artists, contributors, labels and rights controllers point to these references instead of repeating names.  
> * **No more "DetailsByTerritory".** ReleaseDetailsByTerritory, SoundRecordingDetailsByTerritory and their equivalents are removed. The fields move directly onto the Release or the resource, and territorial variation is expressed through the ApplicableTerritoryCode and IsDefault attributes of each value ("…WithDefault" and "…WithTerritory" types).  
> * **New title model.** ReferenceTitle and Title\[@TitleType\] are replaced by DisplayTitleText (title to display as is), DisplayTitle (structured title with subtitles) and AdditionalTitle.  
> * **One main release per message.** ReleaseList holds at most one Release (the album or single) plus TrackReleases for tracks sold separately. The product structure goes through a mandatory ResourceGroup.  
> * **Narrower scope.** No more MIDI, UserDefinedResource, detailed works (WorkList, MusicalWork), collections, CatalogTransfer or CatalogListMessage.  
> * **Simplified deals.** The Usage / ResourceUsage structure is replaced by UseType, CarrierType and TechnicalInstantiation directly in DealTerms. The TakeDown and AllDealsCancelled elements are removed: DDEX simplified how rights reductions and takedowns are communicated (see the 4.1 release note and the DDEX knowledge base for the exact choreography).  
> * **Additions.** ChapterList (audio/video chapters), SupplementalDocumentList (an additional XML file, for example for voice assistants), DisplayCredits, TitleDisplayInformation, Raga / Tala / Deity (Indian music), IsHiResMusic, IsSoundtrack.

### **Root and header**

| Composite / path | Change | 3.8.3 | 4.1 | Example |
| :---- | :---- | :---- | :---- | :---- |
| Version identification | Attribute removed | namespace ern/383 \+ mandatory @MessageSchemaVersionId | namespace ern/41 only | \<ern:NewReleaseMessage xmlns:ern="http\://ddex.net/xml/ern/41" LanguageAndScriptCode="en" ReleaseProfileVersionId="Audio"\> |
| NewReleaseMessage / @LanguageAndScriptCode | Made required | optional | required | see above |
| NewReleaseMessage / @BusinessProfileVersionId | Removed | optional | absent |  |
| NewReleaseMessage / @ReleaseProfileVersionId | Type restricted | free string | avs:ReleaseProfileVersionId |  |
| NewReleaseMessage / @ReleaseProfileVariantVersionId | Added | absent | avs:ReleaseProfileVariantVersionId |  |
| NewReleaseMessage / UpdateIndicator, IsBackfill, CatalogTransfer, WorkList, CollectionList | Removed | present | absent | In ERN 4, each NewReleaseMessage describes the complete release; there is no longer an update indicator. |
| NewReleaseMessage / PartyList | Added (mandatory) | absent | PartyList \[1..1\] | see "Parties" |
| NewReleaseMessage / ChapterList | Added | absent | \[0..1\] | \<ChapterList\>\<Chapter\>\<ChapterReference\>X1\</ChapterReference\>…\</Chapter\>\</ChapterList\> |
| NewReleaseMessage / SupplementalDocumentList | Added | absent | \[0..1\] | An additional XML file delivered with the message. |
| NewReleaseMessage / CueSheetList | Type changed | CueSheetList (CueSheet / Cue / CueCreationReference) | DetailedCueSheetList (DetailedCueSheet / DetailedCue, with titles and contributors carried by the cue) |  |
| CatalogListMessage | Message removed | present | absent |  |
| MessageHeader / MessageSender, SentOnBehalfOf, MessageRecipient | Type changed | MessagingParty | MessagingPartyWithoutCode | \<MessageSender\>\<PartyId\>PADPIDA2014120301R\</PartyId\>\<PartyName\>\<FullName\>Label\</FullName\>\</PartyName\>\</MessageSender\> |
| MessageHeader / Comment | Removed | \[0..1\] | absent |  |

### **Parties**

| Composite / path | Change | 3.8.3 | 4.1 | Example |
| :---- | :---- | :---- | :---- | :---- |
| PartyList / Party | New | names repeated in each Artist / ResourceContributor | Party: PartyReference \[1\], PartyId \[0..n\] or PartyName \[1..n\], Affiliation, RelatedParty, ArtistProfilePage | \<PartyList\>\<Party\>\<PartyReference\>P1\</PartyReference\>\<PartyName\>\<FullName\>Daft Punk\</FullName\>\</PartyName\>\<PartyId\>\<ISNI\>0000000123456789\</ISNI\>\</PartyId\>\</Party\>\</PartyList\> |
| DisplayArtist | Restructured | Artist: PartyName / PartyId \+ ArtistRole inline | ArtistPartyReference \[1\], DisplayArtistRole \[1\], ArtisticRole \[0..n\], TitleDisplayInformation \[0..n\], @SequenceNumber | \<DisplayArtist SequenceNumber="1"\>\<ArtistPartyReference\>P1\</ArtistPartyReference\>\<DisplayArtistRole\>MainArtist\</DisplayArtistRole\>\</DisplayArtist\> |
| Contributor (replaces ResourceContributor and IndirectResourceContributor) | Restructured | ResourceContributor with name and ResourceContributorRole | ContributorPartyReference \[1\], Role (ContributorRole) \[0..n\], InstrumentType \[0..n\], HasMadeFeaturedContribution, HasMadeContractedContribution, DisplayCredits | \<Contributor\>\<ContributorPartyReference\>P2\</ContributorPartyReference\>\<Role\>Producer\</Role\>\</Contributor\> |
| DisplayArtistName | Type changed | Name, inside ReleaseDetailsByTerritory | DisplayArtistNameWithDefault \[1..n\] on Release and resources | \<DisplayArtistName\>Daft Punk\</DisplayArtistName\> |
| Release / ReleaseLabelReference (replaces LabelName) | Restructured | LabelName (text) per territory | ReleaseLabelReference \[1..n\] pointing to a Party | \<ReleaseLabelReference\>P3\</ReleaseLabelReference\> |
| ResourceRightsController / WorkRightsController | New (replace RightsController / TypedRightsController) | RightsController per territory | composites on each resource, with DelegatedUsageRights |  |

### **Release and ReleaseList**

| Composite / path | Change | 3.8.3 | 4.1 | Example |
| :---- | :---- | :---- | :---- | :---- |
| ReleaseList | Restructured | Release \[0..n\] | Release \[0..1\] \+ TrackRelease \[0..n\] | \<ReleaseList\>\<Release\>…\</Release\>\<TrackRelease\>…\</TrackRelease\>\</ReleaseList\> |
| TrackRelease | New | Release\[@IsMainRelease=false\] of type TrackRelease | ReleaseReference, ReleaseId, ReleaseResourceReference, ReleaseLabelReference, Genre… | \<TrackRelease\>\<ReleaseReference\>R1\</ReleaseReference\>\<ReleaseId\>\<ISRC\>FRZ031500001\</ISRC\>\</ReleaseId\>\<ReleaseResourceReference\>A1\</ReleaseResourceReference\>…\</TrackRelease\> |
| Release / ReleaseReference | Cardinality | \[0..n\] | \[1..1\] | \<ReleaseReference\>R0\</ReleaseReference\> |
| Release / ReleaseId | Cardinality | \[1..n\] | \[1..1\] (one composite, several identifiers inside) | \<ReleaseId\>\<ICPN\>0602345678901\</ICPN\>\<CatalogNumber Namespace="DPID:PADPIDA…"\>CAT001\</CatalogNumber\>\</ReleaseId\> |
| Release / ReleaseType | Type and cardinality | ReleaseType \[0..n\] | ReleaseTypeForReleaseNotification \[1..n\] | \<ReleaseType\>Album\</ReleaseType\> |
| Release / ReferenceTitle, Title | Replaced | ReferenceTitle \[1\] \+ Title per territory | DisplayTitleText \[1..n\], DisplayTitle \[1..n\], AdditionalTitle \[0..n\] | \<DisplayTitleText\>Discovery (Deluxe)\</DisplayTitleText\>\<DisplayTitle\>\<TitleText\>Discovery\</TitleText\>\<SubTitle\>Deluxe\</SubTitle\>\</DisplayTitle\> |
| Release / ReleaseResourceReferenceList, ResourceOmissionReason | Removed | flat list of resources | mandatory ResourceGroup \[1..1\] (ResourceGroupContentItem / ReleaseResourceReference, sub-groups \= discs) | \<ResourceGroup\>\<ResourceGroup\>\<SequenceNumber\>1\</SequenceNumber\>\<ResourceGroupContentItem\>\<SequenceNumber\>1\</SequenceNumber\>\<ReleaseResourceReference\>A1\</ReleaseResourceReference\>\</ResourceGroupContentItem\>\</ResourceGroup\>\</ResourceGroup\> |
| Release / Genre | Moved up, made mandatory | Genre in ReleaseDetailsByTerritory \[0..n\] | Genre (GenreWithTerritory) \[1..n\] | \<Genre\>\<GenreText\>Electronic\</GenreText\>\</Genre\> |
| Release / ParentalWarningType | Moved up, made mandatory | \[0..n\] per territory | ParentalWarningTypeWithTerritory \[1..n\] | \<ParentalWarningType\>NotExplicit\</ParentalWarningType\> |
| Release / PLine, CLine, CourtesyLine | Type changed | PLine / CLine (and per territory) | PLineWithDefault, CLineWithDefault, CourtesyLineWithDefault | \<PLine\>\<Year\>2001\</Year\>\<PLineText\>(P) 2001 Label\</PLineText\>\</PLine\> |
| Release / GlobalReleaseDate, GlobalOriginalReleaseDate | Replaced | EventDate | ReleaseDate, OriginalReleaseDate (EventDateWithDefault \[0..n\]) | \<ReleaseDate\>2001-03-12\</ReleaseDate\> |
| Release / IsCompilation, IsMultiArtistCompilation | Mandatory choice | IsMultiArtistCompilation optional per territory | choice IsCompilation | IsMultiArtistCompilation \[1\] | \<IsMultiArtistCompilation\>false\</IsMultiArtistCompilation\> |
| Release / Keywords, Synopsis, MarketingComment, AvRating, RelatedRelease, AdministratingRecordCompany | Moved up from ReleaseDetailsByTerritory | per territory | directly on Release (…WithTerritory types) |  |
| Release / Raga, Tala, Deity, IsSoundtrack, IsHiResMusic, HiResMusicDescription | Added | absent | \[0..n\] / \[0..1\] | \<IsHiResMusic\>true\</IsHiResMusic\> |
| Release / LanguageOfPerformance, LanguageOfDubbing, SubTitleLanguage, RightsAgreementId, SalesReportingProxyReleaseId, ReleaseCollectionReferenceList, ArtistProfilePage | Removed from Release | present | absent (languages on resources; ArtistProfilePage on Party) |  |

### **Resources**

| Composite / path | Change | 3.8.3 | 4.1 | Example |
| :---- | :---- | :---- | :---- | :---- |
| ResourceList / MIDI, UserDefinedResource | Removed | present | absent |  |
| SoundRecording / SoundRecordingType | Renamed, mandatory | SoundRecordingType \[0..1\] | Type \[1..1\] | \<Type\>MusicalWorkSoundRecording\</Type\> |
| SoundRecording / SoundRecordingId | Renamed | SoundRecordingId \[1..n\] | ResourceId \[1..n\] | \<ResourceId\>\<ISRC\>FRZ031500001\</ISRC\>\</ResourceId\> |
| SoundRecording / IndirectSoundRecordingId | Renamed | IndirectSoundRecordingId | WorkId (MusicalWorkId) | \<WorkId\>\<ISWC\>T0345246801\</ISWC\>\</WorkId\> |
| SoundRecording / ReferenceTitle \+ Title | Replaced |  | DisplayTitleText \[1..n\], DisplayTitle \[1..n\], AdditionalTitle, VersionType | \<VersionType\>RadioVersion\</VersionType\> |
| SoundRecording / DisplayArtist, Contributor, Character, PLine, CourtesyLine, ParentalWarningType | Moved up from SoundRecordingDetailsByTerritory | per territory | on SoundRecording; DisplayArtist and ParentalWarningType mandatory \[1..n\] |  |
| SoundRecording / TechnicalSoundRecordingDetails | Renamed | inside DetailsByTerritory | TechnicalDetails \[0..n\] | \<TechnicalDetails\>\<TechnicalResourceDetailsReference\>T1\</TechnicalResourceDetailsReference\>\<File\>\<URI\>resources/A1.flac\</URI\>\</File\>\</TechnicalDetails\> |
| SoundRecording / IsMedley, IsPotpourri | Replaced | booleans | CompositeMusicalWorkType (avs) | \<CompositeMusicalWorkType\>Medley\</CompositeMusicalWorkType\> |
| SoundRecording / IsHiddenResource | Replaced | IsHiddenResource | ContainsHiddenContent |  |
| SoundRecording / IsBonusResource | Moved | on the resource | on ResourceGroupContentItem (IsBonusResource, IsInstantGratificationResource, IsPreOrderIncentiveResource) |  |
| SoundRecording / IsArtistRelated, IsBackground, HasPreOrderFulfillment, IsComputerGenerated, NoSilenceBefore/After, PerformerInformationRequired, NumberOf…Artists, TerritoryOfCommissioning, collections and work links | Removed | present | absent |  |
| SoundRecording / FirstPublicationDate, RelatedRelease, RelatedResource, DisplayCredits, AudioChannelConfiguration, Raga, Tala, Deity, AudioChapterReference, IsHiResMusic, @IsSupplemental | Added | absent | \[0..n\] / \[0..1\] | \<SoundRecording IsSupplemental="false"\> |
| Image, Video, Text, SheetMusic, Software | Same redesign | …DetailsByTerritory | direct fields, ResourceId, DisplayTitle, Contributor… |  |

### **Deals**

| Composite / path | Change | 3.8.3 | 4.1 | Example |
| :---- | :---- | :---- | :---- | :---- |
| DealList / ReleaseDeal | Cardinality | \[0..n\] | \[1..n\] (when DealList is present) |  |
| ReleaseDeal / EffectiveDate | Removed | \[0..1\] | absent |  |
| Deal / DealReference | Type simplified | DealReference (composite) | string |  |
| Deal / ResourceUsage | Removed | \[0..1\] | absent |  |
| Deal / IsCommunicatedOutOfBand | Added | absent | \[0..1\] | \<Deal\>\<IsCommunicatedOutOfBand\>true\</IsCommunicatedOutOfBand\>\</Deal\> |
| DealTerms / Usage | Replaced | Usage \[1..n\] (UseType, UserInterfaceType, DistributionChannelType…) | UseType (DiscoverableUseType) \[0..n\], CarrierType \[0..n\], TechnicalInstantiation \[0..1\], NumberOfUsages \[0..1\]; UserInterfaceType and DistributionChannelType are dropped (UserInterfaceType returns in 4.2) | \<DealTerms\>\<TerritoryCode\>Worldwide\</TerritoryCode\>\<ValidityPeriod\>\<StartDate\>2021-01-01\</StartDate\>\</ValidityPeriod\>\<CommercialModelType\>SubscriptionModel\</CommercialModelType\>\<UseType\>OnDemandStream\</UseType\>\</DealTerms\> |
| DealTerms / TakeDown, AllDealsCancelled | Removed | choice with Usage | absent |  |
| DealTerms / ValidityPeriod | Type changed | Period \[1..n\] | PeriodWithoutFlags \[1..n\] |  |
| DealTerms / ConsumerRentalPeriod, PreOrderReleaseDate, PreOrderPreviewDate(Time), PreOrderIncentiveResourceList, IsExclusive, RelatedReleaseOfferSet, WebPolicy | Removed | present | absent |  |
| DealTerms / PriceInformation | Type changed | PriceInformation | PriceInformationWithType |  |
| DealTerms / RightsClaimPolicy / Condition | Type changed | Condition | ConditionForRightsClaimPolicy |  |

## **ERN 4.1.1**

### **Overview**

A corrective release of 4.1 (DDEX describes it as fixing XSD errors). It makes Synopsis and Keywords available on TrackRelease, adds a "contributor is credited" flag, distinguishes covers from originals, aligns ResourceRightsController with WorkRightsController (now by party reference), introduces label hierarchies (new IsParentOf / IsChildOf values) and relaxes the preview dates.

### **Field-by-field changes**

| Composite / path | Change | 4.1 | 4.1.1 | Example |
| :---- | :---- | :---- | :---- | :---- |
| Contributor / IsCredited | Added | absent | IsCredited \[0..1\] (boolean with @MayBeShared) | \<IsCredited MayBeShared="true"\>true\</IsCredited\> |
| SoundRecording / IsCover; Video / IsCover | Added | absent | boolean \[0..1\] | \<IsCover\>true\</IsCover\> |
| TrackRelease / Keywords, Synopsis | Added | absent | KeywordsWithTerritory \[0..n\], SynopsisWithTerritory \[0..n\] | \<Synopsis\>First single from the album.\</Synopsis\> |
| Image, Text, Software / Keywords, Synopsis | Removed | \[0..n\] | absent |  |
| ResourceRightsController | Restructured (incompatible) | PartyId / PartyName inline | RightsControllerPartyReference \[1\] (IDREF P…) | \<ResourceRightsController\>\<RightsControllerPartyReference\>P3\</RightsControllerPartyReference\>…\</ResourceRightsController\> |
| DetailedPartyId / IpiNameNumber | Pattern added | string | 11 digits \[0-9\]{11} | \<IpiNameNumber\>00052210040\</IpiNameNumber\> |
| PartyRelationshipType / @MayBeShared | Added | absent | boolean |  |
| DealTerms / ReleaseDisplayStartDate(Time), TrackListingPreviewStartDate(Time), CoverArtPreviewStartDate(Time), ClipPreviewStartDate(Time) | Made optional | mandatory choice \[1..1\] | \[0..1\] | A deal with no preview date at all becomes valid. |
| DisplaySubTitle | Base type | ddex\_SubTitle | string | no effect on messages |
| AVS PartyRelationshipType | Values added |  | IsChildOf, IsParentOf (label hierarchies) | \<RelatedParty\>\<PartyRelatedPartyReference\>P9\</PartyRelatedPartyReference\>\<PartyRelationshipType\>IsChildOf\</PartyRelationshipType\>\</RelatedParty\> |
| AVS ResourceRelationshipType | Values added |  | IsCoverOf, IsCoveredBy, IsDifferentEncoding, UserDefined |  |
| AVS ReleaseType\_ERN4 | Values added |  | EP, Drama, ShortFilm |  |
| AVS (other) | Values added |  | AudioCodecType: AMR, MP; CarrierType: MemoryDevice; TextCodecType: EPUB, LRC, XHTML, XML…; UseType: Dub, Perform, Use; new Period list (classical periods: Baroque, Renaissance…) |  |

## **ERN 4.2**

### **Overview**

An enrichment release. It adds recording session information (place, date, session type, participants), standardised genre categories (alongside the free-text genre), dialects through BCP 47 language codes validated by pattern, and the ability to name the label staff who need access to a DSP's tools (ReleaseAdmin). Display and preview dates leave the deals for dedicated composites, ReleaseVisibility and TrackReleaseVisibility, referenced from Release and TrackRelease. Several encodings of the same recording can be described (EncodingId, IsProvidedInDelivery). DDEX also announces the mandatory AvsVersionId attribute (value 3 at publication), although it is missing from the 4.2 XSD analysed (see Limitations).

### **Field-by-field changes**

| Composite / path | Change | 4.1.1 | 4.2 | Example |
| :---- | :---- | :---- | :---- | :---- |
| NewReleaseMessage / ReleaseAdmin | Added | absent | \[0..n\]: ReleaseAdminId \[1\], PersonnelDescription \[0..1\], SystemDescription \[0..n\] | \<ReleaseAdmin\>\<ReleaseAdminId\>label-ops-01\</ReleaseAdminId\>\<PersonnelDescription\>Digital team\</PersonnelDescription\>\</ReleaseAdmin\> |
| SoundRecording / LocationAndDateOfSession | Added | absent | \[0..n\]: SessionType, Period, Venue (VenueName, VenueAddress, TerritoryCode, LocationCode, VenueRoom), Comment, Contributor (PartyWithRole) | \<LocationAndDateOfSession\>\<SessionType\>Recording\</SessionType\>\<Period\>\<StartDate\>2019-04-02\</StartDate\>\</Period\>\<Venue\>\<VenueName\>Studio Ferber\</VenueName\>\<TerritoryCode\>FR\</TerritoryCode\>\</Venue\>\</LocationAndDateOfSession\> |
| SoundRecording / DisableCrossfade, DisableSearch | Added | absent | boolean \[0..1\] | \<DisableCrossfade\>true\</DisableCrossfade\> (gapless albums) |
| GenreWithTerritory (Release/Genre, TrackRelease/Genre) / GenreCategory | Added | absent | \[0..n\]: Value (avs ClassifiedGenre) \[1\], Description \[0..n\] | \<Genre\>\<GenreText\>Electro\</GenreText\>\<GenreCategory\>\<Value\>ElectronicMusic\</Value\>\</GenreCategory\>\</Genre\> |
| GenreWithTerritory / SubGenreCategory | Added | absent | \[0..n\]: Value (avs SubGenre) \[1..n\] (classical sub-genres) | \<SubGenreCategory\>\<Value\>Baroque\</Value\>\</SubGenreCategory\> |
| DealList / ReleaseVisibility, TrackReleaseVisibility | Added | absent | ReleaseVisibility: VisibilityReference (ID V…), ReleaseDisplayStartDateTime, CoverArtPreviewStartDateTime, FullTrackListingPreviewStartDateTime; TrackReleaseVisibility: VisibilityReference, TrackListingPreviewStartDateTime \[1\], ClipPreviewStartDateTime | \<ReleaseVisibility\>\<VisibilityReference\>V1\</VisibilityReference\>\<ReleaseDisplayStartDateTime\>2022-01-07T00:00:00\</ReleaseDisplayStartDateTime\>\</ReleaseVisibility\> |
| Release / ReleaseVisibilityReference; TrackRelease / ReleaseVisibilityReference | Added | absent | IDREF V… \[0..1\] | \<ReleaseVisibilityReference\>V1\</ReleaseVisibilityReference\> |
| DealTerms / ReleaseDisplayStartDate(Time), TrackListingPreviewStartDate(Time), CoverArtPreviewStartDate(Time), ClipPreviewStartDate(Time) | Removed (incompatible) | \[0..1\] | absent, replaced by ReleaseVisibility |  |
| DealTerms / ValidityPeriod | Type changed | PeriodWithoutFlags (start optional) | PeriodWithStartDate (StartDate or StartDateTime required) | \<ValidityPeriod\>\<StartDate\>2022-01-07\</StartDate\>\</ValidityPeriod\> |
| DealTerms / UserInterfaceType | Added | absent | \[0..n\] (avs UserInterfaceType\_ERN: SmartSpeakers, PortableDevice…) | \<UserInterfaceType\>SmartSpeakers\</UserInterfaceType\> |
| DealTerms / CommercialModelType, UseType | Lists restricted to ERN | avs CommercialModelType, UseType | avs CommercialModelType\_ERN, UseType\_ERN |  |
| Release / IsCompilation | Renamed | choice IsCompilation | IsMultiArtistCompilation | choice IsSingleArtistCompilation | IsMultiArtistCompilation | \<IsSingleArtistCompilation\>true\</IsSingleArtistCompilation\> |
| Release / ReleaseLabelReference; TrackRelease / ReleaseLabelReference | Type changed | ReleaseLabelReference | ReleaseLabelReferenceWithParty (+ @LabelType, @AccessControlParty, @ApplicableTerritoryCode) | \<ReleaseLabelReference LabelType="DisplayLabel"\>P3\</ReleaseLabelReference\> |
| Release / RelatedResource, TargetURL; TrackRelease / RelatedRelease, RelatedResource, TargetURL | Added | absent | \[0..n\] / \[0..1\] | \<TargetURL\>https\://example.com/album\</TargetURL\> |
| RelatedResource | Choice changed | ReleaseId in the choice | ResourceId in the choice |  |
| ReleaseId / ISRC | Removed | \[0..1\] | absent | A TrackRelease is identified by ICPN, GRid, CatalogNumber or ProprietaryId. |
| TechnicalSoundRecordingDetails, TechnicalVideoDetails / EncodingId, EncodingDescription | Added | absent | \[0..1\] | \<EncodingId\>\<ISRC\>FRZ031500002\</ISRC\>\</EncodingId\>\<EncodingDescription\>Dolby Atmos\</EncodingDescription\> |
| Technical\*Details (6 types) / IsProvidedInDelivery | Added | absent | boolean \[0..1\] | \<IsProvidedInDelivery\>false\</IsProvidedInDelivery\> |
| TechnicalVideoDetails, DealTermsTechnicalInstantiation / VideoDefinitionType | Type changed | avs:VideoDefinitionType | VideoDefinitionType composite (+ @Namespace, @UserDefinedValue) |  |
| AvRating / Reason | Type changed | avs:RatingReason | RatingReason composite (UserDefined allowed) |  |
| ResourceRightsController, WorkRightsController / RightsControllerRole | Renamed | RightsControllerRole | RightsControlType | \<RightsControlType\>RightsController\</RightsControlType\> |
| DelegatedUsageRights / TerritoryOfRightsDelegation | Type widened | CurrentTerritoryCode | AllTerritoryCode |  |
| ConditionForRightsClaimPolicy / MeasurementType | Added | absent | avs MeasurementType \[0..1\] (Audio, Video, BothAudioAndVideo…) |  |
| SoundRecording, Video / LanguageOfPerformance; Video / LanguageOfDubbing, SubTitleLanguage; SheetMusic / LanguageOfLyrics | Type changed (dialects) | avs:IsoLanguageCode | BCP 47 string validated by pattern | \<LanguageOfPerformance\>de-CH\</LanguageOfPerformance\> |
| @LanguageAndScriptCode (every composite that carries it) | Pattern added | free string | BCP 47 pattern \[a-zA-Z\]{2,3}(-\[a-zA-Z\]+)?(-\[a-zA-Z\]{2}|-\[0-9\]{3})?… | LanguageAndScriptCode="ja-Latn"; "english" becomes invalid. |
| PeriodWithoutFlags (ExternalResourceLink/ValidityPeriod) / StartDate, EndDate | Type changed | EventDateWithoutFlags | EventDateWithCurrentTerritory |  |
| EventDateTimeWithoutFlags / @ApplicableTerritoryCode | Type restricted | avs:AllTerritoryCode | avs:CurrentTerritoryCode |  |
| PartyNameWithTerritory / @IsDefault | Added | absent | boolean |  |
| PriceInformationWithType / @Namespace, @UserDefinedValue; PriceType | Added; type relaxed | PriceType based on avs | PriceType as free string |  |
| Title (PurgedRelease) / @TitleType | Type changed | avs:TitleType | avs:AdditionalTitleType |  |

## **ERN 4.3**

### **Overview**

A major release, not backward compatible according to DDEX. The structural change is the introduction of editions: a SoundRecording (or Video) now contains one or more SoundRecordingEditions (or VideoEditions), each with its own identifiers, P-lines, edition contributors and technical details. Immersive (Dolby Atmos…) and stereo versions of the same recording can therefore sit in the same message. Other additions:

> * Clips: "previews" become clips (ClipDetails, SoundRecordingClipDetails, VideoClipDetails), and a new ClipRelease allows standalone clips to be delivered (for example for short-form formats).  
> * Delivery files: audio and video technical details are grouped into DeliveryFile (AudioDeliveryFile, VideoDeliveryFile), with HDR and immersive audio metadata.  
> * The old Type is split: Type stays mandatory, RecordingFormat (live, acoustic, 360…) is optional.  
> * Vocals: HasVocalPerformance and HasForegroundVocalPerformance complement IsInstrumental.  
> * Classical profile: ApplyClassicalProfileVariant attribute on SoundRecording and Video.  
> * RightsClaimPolicy: conditions limited to segments, and service exceptions.  
> * Language: Language composite with @IsMainLanguage; LanguageOfText added on Text.  
> * Mandatory AvsVersionId attribute on NewReleaseMessage and PurgeReleaseMessage.

### **Field-by-field changes**

| Composite / path | Change | 4.2 | 4.3 | Example |
| :---- | :---- | :---- | :---- | :---- |
| NewReleaseMessage, PurgeReleaseMessage / @AvsVersionId | Added (mandatory) | absent from the 4.2 XSD analysed | string, required | \<ern:NewReleaseMessage xmlns:ern="http\://ddex.net/xml/ern/43" AvsVersionId="N" LanguageAndScriptCode="en"\> (N \= version of the AVS used) |
| SoundRecording / SoundRecordingEdition | Added (mandatory) | absent | \[1..n\]: Type (ImmersiveEdition | NonImmersiveEdition) \[0..1\], ResourceId \[1..n\], EditionContributor \[0..n\], PLine \[0..n\], RecordingMode \[0..1\], TechnicalDetails \[0..n\] | \<SoundRecordingEdition\>\<Type\>NonImmersiveEdition\</Type\>\<ResourceId\>\<ISRC\>FRZ031500001\</ISRC\>\</ResourceId\>\<PLine\>…\</PLine\>\<TechnicalDetails\>…\</TechnicalDetails\>\</SoundRecordingEdition\>\<SoundRecordingEdition\>\<Type\>ImmersiveEdition\</Type\>\<ResourceId\>\<ISRC\>FRZ031500099\</ISRC\>\</ResourceId\>\<RecordingMode\>ImmersiveAudio\</RecordingMode\>…\</SoundRecordingEdition\> |
| SoundRecording / ResourceId, PLine, TechnicalDetails, AudioChannelConfiguration | Removed (moved into the edition) | on SoundRecording | in SoundRecordingEdition (AudioChannelConfiguration becomes RecordingMode) | A 4.2 parser reading SoundRecording/ResourceId/ISRC must read SoundRecording/SoundRecordingEdition/ResourceId/ISRC. |
| Video / VideoEdition | Added (mandatory) | absent | \[1..n\]: Type, ResourceId \[1..n\], EditionContributor, PLine, CLine, RecordingMode, TechnicalDetails | same principle as SoundRecordingEdition |
| Video / ResourceId, PLine, CLine, TechnicalDetails | Removed (moved) | on Video | in VideoEdition |  |
| EditionContributor | New | absent | ContributorPartyReference \[1\], Role \[0..n\], HasMadeFeaturedContribution, HasMadeContractedContribution, IsCredited, DisplayCredits, @SequenceNumber | \<EditionContributor\>\<ContributorPartyReference\>P7\</ContributorPartyReference\>\<Role\>ImmersiveMasteringEngineer\</Role\>\</EditionContributor\> |
| SoundRecording, Video / RecordingFormat | Added | absent | \[0..n\] (avs RecordingFormat: LiveEventRecording, Acoustic, 360Video…) | \<Type\>MusicalWorkSoundRecording\</Type\>\<RecordingFormat\>LiveEventRecording\</RecordingFormat\> |
| Video / Type | List restricted | avs:VideoType | avs:VideoType\_ERN43 (Clip, FrontCoverVideo, LongForm/ShortForm…MusicalWorkVideo, UserDefined) | \<Type\>ShortFormMusicalWorkVideo\</Type\> |
| SoundRecording, Video / HasVocalPerformance, HasForegroundVocalPerformance | Added | absent | boolean \[0..1\] | \<IsInstrumental\>false\</IsInstrumental\>\<HasVocalPerformance\>true\</HasVocalPerformance\>\<HasForegroundVocalPerformance\>false\</HasForegroundVocalPerformance\> |
| SoundRecording, Video / @ApplyClassicalProfileVariant | Added | absent | boolean | \<SoundRecording ApplyClassicalProfileVariant="true"\> |
| SoundRecording, Video / LanguageOfPerformance; Text / LanguageOfText | Type changed; added | BCP 47 string | Language (BCP 47 \+ @IsMainLanguage) | \<LanguageOfPerformance IsMainLanguage="true"\>fr\</LanguageOfPerformance\> |
| TechnicalSoundRecordingDetails | Restructured | EncodingId, AudioCodecType, BitRate, SamplingRate, BitsPerSample, Duration, File, Fingerprint, IsPreview, PreviewDetails… directly | DeliveryFile (AudioDeliveryFile) \[0..n\], HasImmersiveAudioMetadata, IsClip, ClipDetails (SoundRecordingClipDetails) \[0..n\] | \<TechnicalDetails\>\<TechnicalResourceDetailsReference\>T1\</TechnicalResourceDetailsReference\>\<DeliveryFile\>\<Type\>AudioFile\</Type\>\<AudioCodecType\>FLAC\</AudioCodecType\>\<NumberOfChannels\>2\</NumberOfChannels\>\<SamplingRate UnitOfMeasure="kHz"\>44.1\</SamplingRate\>\<BitsPerSample\>16\</BitsPerSample\>\<File\>\<URI\>resources/A1.flac\</URI\>\</File\>\</DeliveryFile\>\</TechnicalDetails\> |
| AudioDeliveryFile | New | absent | Type (= AudioFile), ContainerFormat, AudioCodecType, BitRate, OriginalBitRate, NumberOfChannels (string), NumberOfAudioObjects, SamplingRate, OriginalSamplingRate, BitsPerSample, Duration, BitDepth, File, Fingerprint, IsProvidedInDelivery | see above |
| TechnicalVideoDetails | Restructured | video characteristics directly | DeliveryFile (VideoDeliveryFile) \[0..n\], IsClip, ClipDetails (VideoClipDetails) |  |
| VideoDeliveryFile | New | absent | 4.2 video fields \+ HasImmersiveAudioMetadata, NumberOfAudioObjects, ElectroOpticalTransferFunctionType, PrimaryColorType, HdrVideoDynamicMetadataType, HdrVideoStaticMetadataType; AspectRatio \[0..n\] | \<HdrVideoDynamicMetadataType Version="4.0" SdrDerivationPermitted="true"\>DolbyVisionEmbedded\</HdrVideoDynamicMetadataType\> |
| Technical{Image,Text,SheetMusic,Software}Details / IsPreview, PreviewDetails | Renamed | IsPreview, PreviewDetails | IsClip, ClipDetails \[0..n\] (ClipType mandatory) | \<IsClip\>true\</IsClip\>\<ClipDetails\>\<ClipType\>Preview\</ClipType\>\<ExpressionType\>Instructive\</ExpressionType\>\</ClipDetails\> |
| SoundRecordingClipDetails, VideoClipDetails | New | SoundRecordingPreviewDetails (StartPoint, EndPoint, Duration) | TechnicalResourceDetailsReference \[1\], ClipType \[1\], Timing \[0..n\], ExpressionType \[1\], DeliveryFile \[0..n\] | \<ClipDetails\>\<TechnicalResourceDetailsReference\>T2\</TechnicalResourceDetailsReference\>\<ClipType\>Preview\</ClipType\>\<Timing\>\<StartPoint\>30\</StartPoint\>\<DurationUsed\>PT30S\</DurationUsed\>\</Timing\>\<ExpressionType\>Informative\</ExpressionType\>\</ClipDetails\> |
| Timing | Modified | StartPoint (duration) \[0..1\], DurationUsed \[0..1\] | StartPoint (decimal, seconds) \[1..1\], EndPoint \[0..1\], DurationUsed \[0..n\] | \<StartPoint\>30.5\</StartPoint\> instead of PT30.5S |
| ReleaseList / ClipRelease | Added | absent | \[0..n\]: ReleaseReference, ReleaseId, DisplayTitleText, DisplayTitle, AdditionalTitle, ReleaseResourceReference \[1\], ReleaseLabelReference \[1..n\], Genre \[1..n\], RelatedRelease | \<ClipRelease\>\<ReleaseReference\>R9\</ReleaseReference\>\<ReleaseId\>\<ProprietaryId Namespace="PADPIDA…"\>clip-001\</ProprietaryId\>\</ReleaseId\>\<ReleaseResourceReference\>A9\</ReleaseResourceReference\>…\</ClipRelease\> |
| Release / VersionType | Added | absent | \[0..n\] | \<VersionType\>LiveVersion\</VersionType\> |
| Release, TrackRelease / ReleaseVisibilityReference | Cardinality | \[0..1\] | \[0..n\] | One visibility per territory. |
| ReleaseVisibility, TrackReleaseVisibility | Added | no territory | TerritoryCode / ExcludedTerritoryCode (mandatory choice), @DoNotDisplayDates; ClipPreviewStartDateTime on ReleaseVisibility | \<ReleaseVisibility DoNotDisplayDates="true"\>\<VisibilityReference\>V1\</VisibilityReference\>\<TerritoryCode\>FR\</TerritoryCode\>…\</ReleaseVisibility\> |
| ConditionForRightsClaimPolicy / Segment | Added | absent | \[0..n\]: StartTime \[1\], Duration or EndTime | \<Segment\>\<StartTime\>PT1M\</StartTime\>\<EndTime\>PT2M30S\</EndTime\>\</Segment\> |
| ConditionForRightsClaimPolicy / ServiceException | Added | absent | \[0..n\]: PartyId or PartyName, TradingName, URL, Channel (ProprietaryId, URL) | \<ServiceException\>\<PartyName\>\<FullName\>Official channel\</FullName\>\</PartyName\>\<Channel\>\<URL\>https\://…\</URL\>\</Channel\>\</ServiceException\> |
| CueSheetList | Types renamed | DetailedCueSheetList / DetailedCueSheet / DetailedCue | CueSheetList / CueSheet / Cue (same content) | No change to XML tags. |
| Affiliation / RightsType | Type renamed | SimpleRightsType | RightsType (same content) |  |
| DisplayTitle, DisplayTitleText, AdditionalTitle, DisplayArtistNameWithDefault, PartyNameWithTerritory / @IsInOriginalLanguage | Added | absent | boolean | \<DisplayTitleText IsInOriginalLanguage="false" LanguageAndScriptCode="en"\>Parasite\</DisplayTitleText\> |
| LinkedReleaseResourceReference / @SequenceNumber, @IsMultiFile | Added | absent | integer, boolean |  |
| AspectRatio / @AppliesToCroppedResource; TechnicalImageDetails / AspectRatio | Added; cardinality | \[0..1\] | \[0..n\] |  |
| ResourceRightsController / DelegatedUsageRights | Cardinality | \[1..n\] | \[0..n\] |  |

### **Notable allowed values (AVS), 4.1.1 → 4.3**

The 4.2 AVS is not available, so the additions below may date from 4.2 or 4.3. Only lists used by the ERN schema are included.

| List | Values added | Values removed |
| :---- | :---- | :---- |
| EditionType (new) | ImmersiveEdition, NonImmersiveEdition |  |
| ClipType (new) | Preview, StandaloneClip, UserDefined |  |
| RecordingFormat (new) | 90 values: 360Video, Acoustic, LiveEventRecording, LiveStream, LyricVideo… |  |
| ClassifiedGenre (new) | Blues, ClassicalMusic, CountryMusic, ElectronicMusic, Folk, Gospel, HipHop, Jazz, Latin, Pop, R'n'B, Reggae, Rock, Spoken, Traditional, WorldMusic, UserDefined |  |
| SubGenre (new) | 483 sub-genres (ChicagoBlues, Baroque, EarlyRomantic…) |  |
| SessionType (new) | Recording, Mixing, Mastering, Overdub, Demo, LivePerformance… (19) |  |
| UseType\_ERN, CommercialModelType\_ERN, UserInterfaceType\_ERN, VideoType\_ERN43 (new) | ERN-specific subsets |  |
| DeliveryFileType, ElectroOpticalTransferFunctionType, PrimaryColorType, HdrVideoDynamicMetadataType, HdrVideoStaticMetadataType, MeasurementType (new) | AudioFile…; BT.1886, ST2084; BT.601, BT.709, BT.2020; DolbyVisionEmbedded/StandAlone; MaxCLL, MaxFALL |  |
| AudioCodecType | AC-4, DolbyAtmosMasterADM, DolbyDigitalPlus, MPEG-H\_3D |  |
| VideoCodecType | HEVC, ProRes-422 (and HQ, LT, Proxy variants), ProRes-4444, ProRes-4444\_XQ | QuickTime |
| RecordingMode | ImmersiveAudio |  |
| SoundRecordingType | AudioStem, Clip |  |
| ReleaseRelationshipType | IsImmersiveEditionOf, IsNonImmersiveEditionOf, IsEditedVersionOf, IsSlowedDownOf, IsSpedUpOf, IsAudioUsedFor, IsVideoUsedFor, IsSourceOfEditedVersion |  |
| ResourceRelationshipType | HasClip, IsClipFrom, ContainsSamplesFrom, IsSampledBy, HasPart, IsImmersiveEditionOf, IsNonImmersiveEditionOf, IsSlowedDownOf, IsSpedUpOf… |  |
| DisplayArtistRole | Brand, Composer, UserDefined |  |
| ContributorRole | ImmersiveMasteringEngineer, Mime, Presenter |  |
| AdditionalTitleType | MusicalWorkTitle, TranslatedTitle, TransliteratedTitle |  |
| ImageType | Portrait, ProfilePicture, SocialBannerImage |  |
| TextCodecType / TextType | DdexLyricsFile, EnhancedLRC, SimpleLRC / ClosedCaption, SubTitle |  |
| VersionType | ACappellaVersion | AcapellaVersion (spelling corrected) |
| RightsControllerRole | LocalPayee, RightsHolder |  |
| InstrumentType | \~45 generic values (Drum, Piano, Harp, SynthLead, BowedStrings, ambient sounds: Applause, BirdSong…) | \~175 very specific values (instrument or machine models: AkaiMPC1000, AnalogueSynthesizer…) |

## **ERN 4.3.1**

### **Overview**

A minor but incompatible release, built around three themes. First, transparency about generative AI: a release or resource can declare that it contains AI (ContainsAI: All, Partly, None), each contributor can carry an AiContribution, and AI can be named as a special contributor (SpecialContributor \= GenerativeAI). Second, classical and catalogue metadata: AdditionalTitle is removed (DDEX points secondary titles to the MEAD standard) in favour of FormalTitle and GroupingTitle, Genre becomes DisplayGenre, "Traditional" and "VariousArtists" replace made-up parties, and a contributor's role can carry the instrument. Third, brands: a Brand composite joins the PartyList (for example a film franchise linked to a release). ParentalWarningType becomes optional and can state which standard it follows.  
**Breaking changes for a 4.3 parser:** \<Role\>Composer\</Role\> becomes \<Role\>\<Value\>Composer\</Value\>\</Role\>; Genre becomes DisplayGenre on Release, TrackRelease and ClipRelease; AdditionalTitle no longer exists; PartyList can contain Brand elements.

### **Field-by-field changes**

| Composite / path | Change | 4.3 | 4.3.1 | Example |
| :---- | :---- | :---- | :---- | :---- |
| Release, SoundRecording, Video, Image, Text / ContainsAI | Added | absent | avs ContainsAI \[0..1\]: All, Partly, None | \<ContainsAI\>Partly\</ContainsAI\>. With All, only contributors of type GenerativeAI may be declared; with None, no contributor may have AiContribution Partly or All. |
| Contributor, EditionContributor / AiContribution | Added | absent | avs ContainsAI \[0..1\]; defaults to All when SpecialContributor \= GenerativeAI | \<Contributor\>\<ContributorPartyReference\>P4\</ContributorPartyReference\>\<Role\>\<Value\>Producer\</Value\>\</Role\>\<AiContribution\>Partly\</AiContribution\>\</Contributor\> |
| Contributor, EditionContributor / SpecialContributor | Added (in a choice with ContributorPartyReference) | ContributorPartyReference \[1\] | choice ContributorPartyReference | SpecialContributor (GenerativeAI, Traditional, VariousArtists, UserDefined) | \<Contributor\>\<SpecialContributor\>Traditional\</SpecialContributor\>\<Role\>\<Value\>Composer\</Value\>\</Role\>\</Contributor\> |
| DisplayArtist / SpecialDisplayArtist | Added (in a choice) | ArtistPartyReference \[1\] \+ DisplayArtistRole \[1\] | choice (ArtistPartyReference \+ DisplayArtistRole) | SpecialDisplayArtist | \<DisplayArtist\>\<SpecialDisplayArtist\>VariousArtists\</SpecialDisplayArtist\>\</DisplayArtist\> |
| DisplayArtist / DisplayCredits | Added | absent | \[0..n\] | \<DisplayCredits\>\<DisplayCreditText\>feat. X\</DisplayCreditText\>\<DisplayCreditParty\>P5\</DisplayCreditParty\>\</DisplayCredits\> |
| ContributorRole (Contributor/Role, EditionContributor/Role, DisplayArtist/ArtisticRole, DetailedResourceContributor/Role) | Simple → composite (incompatible) | avs:ContributorRole value \+ @Namespace, @UserDefinedValue | Value (ContributorRoleValue, carries @Namespace / @UserDefinedValue) \[1\], InstrumentType \[0..n\] | 4.3: \<Role\>AssociatedPerformer\</Role\> 4.3.1: \<Role\>\<Value\>AssociatedPerformer\</Value\>\<InstrumentType\>Guitar\</InstrumentType\>\</Role\> |
| AdditionalTitle (14 composites: Release, TrackRelease, ClipRelease, SoundRecording, Video, Image, Text, SheetMusic, Software, Chapter, Cue, ResourceGroup, ResourceSubGroup, RelatedRelease) | Removed | AdditionalTitle \[0..n\] with @TitleType | FormalTitle \[0..n\] and GroupingTitle \[0..n\], type DisplayTitle | 4.3: \<AdditionalTitle TitleType="FormalTitle"\>\<TitleText\>Symphony No. 5 in C minor, Op. 67\</TitleText\>\</AdditionalTitle\> 4.3.1: \<FormalTitle\>\<TitleText\>Symphony No. 5 in C minor, Op. 67\</TitleText\>\</FormalTitle\>\<GroupingTitle\>\<TitleText\>Complete Symphonies\</TitleText\>\</GroupingTitle\> |
| Release, TrackRelease, ClipRelease / Genre | Renamed | Genre \[1..n\] | DisplayGenre \[1..n\] (same GenreWithTerritory type) | \<DisplayGenre\>\<GenreText\>Pop\</GenreText\>\</DisplayGenre\> |
| SubGenreCategory / Description | Added | absent | TextWithoutTerritory \[0..n\] |  |
| PartyList / Brand | Added | Party only | Brand \[0..n\]: BrandReference (ID P…) \[1\], BrandId \[0..n\] or BrandName \[1..n\] | \<PartyList\>\<Party\>…\</Party\>\<Brand\>\<BrandReference\>P20\</BrandReference\>\<BrandName\>\<FullName\>Star Wars\</FullName\>\</BrandName\>\</Brand\>\</PartyList\> |
| Release, SoundRecording, Video / ParentalWarningType | Made optional | \[1..n\] | \[0..n\] | A SoundRecording without ParentalWarningType becomes valid. |
| ParentalWarningType (all resources) | Type changed | ParentalWarningTypeWithTerritory (@Namespace, @UserDefinedValue) | ParentalWarningTypeWithStandard: @ParentalWarningStandard (RiaaPal, UserDefined), @StandardNamespace, @StandardUserDefinedValue, and @TypeNamespace / @TypeUserDefinedValue instead of @Namespace / @UserDefinedValue | \<ParentalWarningType ParentalWarningStandard="RiaaPal"\>Explicit\</ParentalWarningType\> |
| Chapter / ChapterId | Type changed | ProprietaryId | ChapterId: ISRC, ISAN, VISAN, EIDR, ISWC, CatalogNumber, ProprietaryId | \<ChapterId\>\<ISRC\>FRZ031500010\</ISRC\>\</ChapterId\> |
| MessageHeader / SentAsRequestedBy | Added | absent | MessagingPartyWithoutCode \[0..1\] (the party at whose request the message is sent) | \<SentAsRequestedBy\>\<PartyId\>PADPIDA…\</PartyId\>\</SentAsRequestedBy\> |
| RightsClaimPolicy / RightsClaimPolicyReason | Added | absent | \[0..1\]: PreReleaseTime, ThirdPartyRequest, UserDefined | \<RightsClaimPolicyReason\>PreReleaseTime\</RightsClaimPolicyReason\> |
| PLine | Attributes | @PLineType | @ApplicableTerritoryCode, @IsDefault added; @PLineType removed | \<PLine ApplicableTerritoryCode="JP"\>…\</PLine\> |
| CLine | Attributes added |  | @ApplicableTerritoryCode, @IsDefault |  |
| "…WithDefault / …WithTerritory / …WithType / …WithReference" types | Types renamed (XML tags unchanged) | PLineWithDefault, CLineWithDefault, CourtesyLineWithDefault, FulfillmentDateWithTerritory, PriceInformationWithType, AdministratingRecordCompanyWithReference, DisplayArtistNameWithDefault | PLine, CLine, CourtesyLine, FulfillmentDate, PriceInformation, AdministratingRecordCompany, DisplayArtistNameWithOriginalLanguage | No effect on the XML; relevant if classes are generated from the XSD. |
| Local references (ID / IDREF P…, R…, A…, T…, V…, X…, Q…) | Pattern rewritten | \[\\d\\-\_a-zA-Z\]+ | \[\_0-9a-zA-Z-\]+ | Equivalent in practice; \\d also accepted non-ASCII Unicode digits. |

### **Notable allowed values (AVS), 4.3 → 4.3.1**

Comparison of the avs43 and avs431 files in the dedex repository. The ContainsAI, SpecialContributorType, ParentalWarningStandard and RightsClaimPolicyReason lists are already present in the repository's avs43 file: the AVS is shared by all DDEX standards and updated continuously.

| List | Values added | Values removed |
| :---- | :---- | :---- |
| ContributorRole, ResourceContributorRole | A+R, A+RAdministrator, A+RCoordinator, ArtistManager, Cantor, ChamberEnsemble, ChamberOrchestra, Chorus, ChorusMember, HornArranger, PrincipalMusicDirector, RecordingSupervisor, SoundEditor, StringArranger, SymphonicOrchestra |  |
| InstrumentType | SteelGuitar, DigitalPiano, ChamberOrgan, WurlitzerOrgan, ClayDrum, Darbouka, ElectronicPercussion, Metallophone, CelticElectroHarp, StrohViolin, TrebleTanpura, Violone, ElectronicWindInstrument, Stylophone, Synclavier, Pipes, TenorHorn, TraversoFlute, Whistle, WoodwindInstrument, HornSection, Beatboxing, Yodelling | StrohlViolin (spelling corrected to StrohViolin) |
| ArtistType | 40 ensemble types (BoysChoir, StringTrio, SymphonicOrchestra, WoodwindQuintet…) | Duet |
| New lists | MusicalInstrumentType (730 values), VoiceType (16), LinkVerification, ClusterMembershipType, Ecm\* lists | NewStudioRole |
| IsoLanguageCode | kea |  |
| TerritoryCode | Worldwide |  |

## **ERN 4.3.2**

### **Overview**

A fix for a single schema error. In 4.3.1, Brand/BrandId was typed as ProprietaryIdentifier, an empty complex type: a BrandId could hold neither text nor attributes. The type becomes ProprietaryId, as everywhere else (text value \+ required @Namespace). The semantic diff of the two XSDs shows no other difference (the rest is formatting and documentation). The 4.3.2 XSD imports the current remote AVS (allowed-value-sets.xsd).

### **Field-by-field changes**

| Composite / path | Change | 4.3.1 | 4.3.2 | Example |
| :---- | :---- | :---- | :---- | :---- |
| Brand / BrandId | Type fixed | ProprietaryIdentifier (empty complex type) | ProprietaryId (string \+ required @Namespace) | \<Brand\>\<BrandReference\>P20\</BrandReference\>\<BrandId Namespace="PADPIDA2014120301R"\>brand-0042\</BrandId\>\</Brand\> |
| ProprietaryIdentifier | Type removed | present | absent |  |

## **Appendix: notes on the dedex 4.3.1 PR description**

The PR description (file PR\_431.md) is confirmed by the XSD diff, with two nuances:

> * The IsInOriginalLanguage attribute is not new in 4.3.1: it already exists in 4.3 on DisplayArtistNameWithDefault (and on DisplayTitle, DisplayTitleText, AdditionalTitle, PartyNameWithTerritory). In 4.3.1 only the type name changes (DisplayArtistNameWithOriginalLanguage).  
> * The 4.3.1 BrandId cannot be used in practice (empty type). This is exactly what 4.3.2 fixes: if dedex adds 4.3.2, the class generated for BrandId becomes a standard ProprietaryId.

For dedex, the shape changes to watch in the 4 branch are, in order: the 3.8 → 4.1 rewrite, identifiers and technical details moving into SoundRecordingEdition / VideoEdition (4.3), then the composite Role, DisplayGenre and the composite PartyList (4.3.1).
