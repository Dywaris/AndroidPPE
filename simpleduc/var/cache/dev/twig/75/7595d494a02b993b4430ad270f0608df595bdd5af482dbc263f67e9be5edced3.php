<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f8a085d3248c7cf81c6c531274aec8bc4ce20ec96fb65c293ffdb48c4fb60497 extends Twig_Template
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
        $__internal_ebeb90decbdcaa07e2d3d5c000d93576dc94634ec6c83ca3909c3b490be4b912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebeb90decbdcaa07e2d3d5c000d93576dc94634ec6c83ca3909c3b490be4b912->enter($__internal_ebeb90decbdcaa07e2d3d5c000d93576dc94634ec6c83ca3909c3b490be4b912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4e51e31ffb4eae3c42e99fbaeb9119cbed1ebe368a31f52a71e087761639274f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e51e31ffb4eae3c42e99fbaeb9119cbed1ebe368a31f52a71e087761639274f->enter($__internal_4e51e31ffb4eae3c42e99fbaeb9119cbed1ebe368a31f52a71e087761639274f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ebeb90decbdcaa07e2d3d5c000d93576dc94634ec6c83ca3909c3b490be4b912->leave($__internal_ebeb90decbdcaa07e2d3d5c000d93576dc94634ec6c83ca3909c3b490be4b912_prof);

        
        $__internal_4e51e31ffb4eae3c42e99fbaeb9119cbed1ebe368a31f52a71e087761639274f->leave($__internal_4e51e31ffb4eae3c42e99fbaeb9119cbed1ebe368a31f52a71e087761639274f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
