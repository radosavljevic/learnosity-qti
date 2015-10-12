<?php

namespace LearnosityQti\Utils;

use DOMDocument;
use LearnosityQti\Exceptions\MappingException;
use LearnosityQti\Processors\QtiV2\Marshallers\LearnosityMarshallerFactory;
use qtism\data\content\TextRun;
use qtism\data\QtiComponent;
use qtism\data\QtiComponentCollection;
use qtism\data\storage\xml\marshalling\MarshallerFactory;

class QtiMarshallerUtil
{
    public static function unmarshallElement($string)
    {
        try {
            $dom = new DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;

            // TODO: Try to clean as much as I can blah
            $string = html_entity_decode($string, ENT_XHTML);

            // TODO: Can only unmarshall nice stuff, doesnt work with dodgy or invalid HTML
            $dom->loadXML("<body>$string</body>", LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $marshallerFactory = new LearnosityMarshallerFactory();
            $components = new QtiComponentCollection();
            foreach ($dom->documentElement->childNodes as $element) {
                if ($element instanceof \DOMText) {
                    $component = new TextRun($element->nodeValue);
                } else {
                    $marshaller = $marshallerFactory->createMarshaller($element);
                    $component = $marshaller->unmarshall($element);
                }
                $components->attach($component);
            }
            return $components;
        } catch (\Exception $e) {
            throw new MappingException('[Unable to transform to QTI] ' . $e->getMessage());
        }
    }

    public static function marshallCollection(QtiComponentCollection $collection)
    {
        $results = [];
        foreach ($collection as $component) {
            $results[] = self::marshall($component);
        }
        return implode('', $results);
    }

    public static function marshall(QtiComponent $component)
    {
        $marshallerFactory = new LearnosityMarshallerFactory();
        $marshaller = $marshallerFactory->createMarshaller($component);
        $element = $marshaller->marshall($component);

        $dom = new \DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = false;
        $node = $dom->importNode($element, true);

        return $dom->saveXML($node);
    }

    public static function marshallValidQti(QtiComponent $component)
    {
        $marshallerFactory = new MarshallerFactory();
        $marshaller = $marshallerFactory->createMarshaller($component);
        $element = $marshaller->marshall($component);

        $dom = new \DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = false;
        $node = $dom->importNode($element, true);

        return $dom->saveXML($node);
    }
}