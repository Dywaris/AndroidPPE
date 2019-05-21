<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0f1511fedc51b58b8baf951e120aa7b3ae0a04678ab01ced38de912bcacc2542 extends Twig_Template
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
        $__internal_f804d29ab215557f6bc6f5735b79ffae8e12d3031612151d15bad99939c71da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f804d29ab215557f6bc6f5735b79ffae8e12d3031612151d15bad99939c71da3->enter($__internal_f804d29ab215557f6bc6f5735b79ffae8e12d3031612151d15bad99939c71da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_25ebad10f4a09fe5619564d2e170661c2cfa28a1a9ae5dbdd523f33bc0247c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ebad10f4a09fe5619564d2e170661c2cfa28a1a9ae5dbdd523f33bc0247c2d->enter($__internal_25ebad10f4a09fe5619564d2e170661c2cfa28a1a9ae5dbdd523f33bc0247c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f804d29ab215557f6bc6f5735b79ffae8e12d3031612151d15bad99939c71da3->leave($__internal_f804d29ab215557f6bc6f5735b79ffae8e12d3031612151d15bad99939c71da3_prof);

        
        $__internal_25ebad10f4a09fe5619564d2e170661c2cfa28a1a9ae5dbdd523f33bc0247c2d->leave($__internal_25ebad10f4a09fe5619564d2e170661c2cfa28a1a9ae5dbdd523f33bc0247c2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
