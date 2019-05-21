<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5ecdd82839833f3fabfc01a1e4b029367b742fe78ffc3d7dadf3a84f99c032c1 extends Twig_Template
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
        $__internal_4523dfefbff9ef43af4d33749dc223d2274aae2319bf7ca4180e86cbf509a925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4523dfefbff9ef43af4d33749dc223d2274aae2319bf7ca4180e86cbf509a925->enter($__internal_4523dfefbff9ef43af4d33749dc223d2274aae2319bf7ca4180e86cbf509a925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_dfd58d0c22fdb464f6f700ba48350c56ccb81d94f6a797e5f6cd29a5f32dee09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd58d0c22fdb464f6f700ba48350c56ccb81d94f6a797e5f6cd29a5f32dee09->enter($__internal_dfd58d0c22fdb464f6f700ba48350c56ccb81d94f6a797e5f6cd29a5f32dee09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4523dfefbff9ef43af4d33749dc223d2274aae2319bf7ca4180e86cbf509a925->leave($__internal_4523dfefbff9ef43af4d33749dc223d2274aae2319bf7ca4180e86cbf509a925_prof);

        
        $__internal_dfd58d0c22fdb464f6f700ba48350c56ccb81d94f6a797e5f6cd29a5f32dee09->leave($__internal_dfd58d0c22fdb464f6f700ba48350c56ccb81d94f6a797e5f6cd29a5f32dee09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
