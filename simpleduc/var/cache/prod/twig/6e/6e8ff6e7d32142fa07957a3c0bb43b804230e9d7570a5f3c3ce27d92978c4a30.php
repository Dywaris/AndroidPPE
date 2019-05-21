<?php

/* EpsiFirstBundle:Default:index.html.twig */
class __TwigTemplate_27e1855a3d43c6ebbe0247e9c5a2ec33c23d68ff78f7c20596eb946cfe488a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EpsiFirstBundle::layout.html.twig", "EpsiFirstBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EpsiFirstBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil ";
    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EpsiFirstBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EpsiFirstBundle:Default:index.html.twig", "/var/www/html/simpleduc/src/Epsi/FirstBundle/Resources/views/Default/index.html.twig");
    }
}
