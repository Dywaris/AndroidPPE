<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2ba0a11d08e1bb099d1fb7156561d1baa34ec827d241eb0fccddb15366569094 extends Twig_Template
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
        $__internal_e925509a0c40b19571d4f9382e3f22eb6ebda381f6b216da1940b5b7a70a5af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e925509a0c40b19571d4f9382e3f22eb6ebda381f6b216da1940b5b7a70a5af7->enter($__internal_e925509a0c40b19571d4f9382e3f22eb6ebda381f6b216da1940b5b7a70a5af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_d42a21277b00f8e1661064f0f6b9b867238e0ee81959de4b3c32105949429379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42a21277b00f8e1661064f0f6b9b867238e0ee81959de4b3c32105949429379->enter($__internal_d42a21277b00f8e1661064f0f6b9b867238e0ee81959de4b3c32105949429379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e925509a0c40b19571d4f9382e3f22eb6ebda381f6b216da1940b5b7a70a5af7->leave($__internal_e925509a0c40b19571d4f9382e3f22eb6ebda381f6b216da1940b5b7a70a5af7_prof);

        
        $__internal_d42a21277b00f8e1661064f0f6b9b867238e0ee81959de4b3c32105949429379->leave($__internal_d42a21277b00f8e1661064f0f6b9b867238e0ee81959de4b3c32105949429379_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
