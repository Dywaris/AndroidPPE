<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_865b261147461edbb07e6cb537b9f434304fa99ffba59684ea518efff1f0cafe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a91d873341f46aba766c13e47f81e9b602e595ac119acd41ea86717c17c6d48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91d873341f46aba766c13e47f81e9b602e595ac119acd41ea86717c17c6d48b->enter($__internal_a91d873341f46aba766c13e47f81e9b602e595ac119acd41ea86717c17c6d48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_10de9de496d3089ca04e1e0ac009a2fab776bfa2fd4258a147c26de184ac7854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10de9de496d3089ca04e1e0ac009a2fab776bfa2fd4258a147c26de184ac7854->enter($__internal_10de9de496d3089ca04e1e0ac009a2fab776bfa2fd4258a147c26de184ac7854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a91d873341f46aba766c13e47f81e9b602e595ac119acd41ea86717c17c6d48b->leave($__internal_a91d873341f46aba766c13e47f81e9b602e595ac119acd41ea86717c17c6d48b_prof);

        
        $__internal_10de9de496d3089ca04e1e0ac009a2fab776bfa2fd4258a147c26de184ac7854->leave($__internal_10de9de496d3089ca04e1e0ac009a2fab776bfa2fd4258a147c26de184ac7854_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
