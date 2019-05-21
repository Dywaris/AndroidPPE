<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_49f889cfc5bd0c8f0a6ba4d1f92fda1fdef1ef0e54bb6f261feb69bc3d02fee1 extends Twig_Template
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
        $__internal_d06606e6c3182504dc89f3f9775eefe2cfb1455bb319f343bfaa6d7f84f7f380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06606e6c3182504dc89f3f9775eefe2cfb1455bb319f343bfaa6d7f84f7f380->enter($__internal_d06606e6c3182504dc89f3f9775eefe2cfb1455bb319f343bfaa6d7f84f7f380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_080ec804a0b38ba27288e358002c0849d5661d9c2645e58613a6e266e91a8f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080ec804a0b38ba27288e358002c0849d5661d9c2645e58613a6e266e91a8f3b->enter($__internal_080ec804a0b38ba27288e358002c0849d5661d9c2645e58613a6e266e91a8f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d06606e6c3182504dc89f3f9775eefe2cfb1455bb319f343bfaa6d7f84f7f380->leave($__internal_d06606e6c3182504dc89f3f9775eefe2cfb1455bb319f343bfaa6d7f84f7f380_prof);

        
        $__internal_080ec804a0b38ba27288e358002c0849d5661d9c2645e58613a6e266e91a8f3b->leave($__internal_080ec804a0b38ba27288e358002c0849d5661d9c2645e58613a6e266e91a8f3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
